(function() {
    const TYPE_DELAY = 50;
    const ERASE_DELAY = 30;

    function makeController(){
        return { cancelled: false, timers: [] };
    }

    function clearController(ctrl){
        // sinaliza cancelamento e limpa timeouts pendentes
        ctrl.cancelled = true;
        while(ctrl.timers.length){
            clearTimeout(ctrl.timers.shift());
        }
        // deixamos `cancelled = true` — o handler que iniciar a nova animação
        // deve resetar para false quando começar.
    }

    // helpers para travar/destravar largura do item enquanto anima
    function lockWidth(el){
        try{
            el.dataset._prevMinWidth = el.style.minWidth || '';
            el.style.minWidth = el.offsetWidth + 'px';
        }catch(e){/* noop */}
    }
    function unlockWidth(el){
        try{
            if ('_prevMinWidth' in el.dataset){
                el.style.minWidth = el.dataset._prevMinWidth || '';
                delete el.dataset._prevMinWidth;
            } else {
                el.style.minWidth = '';
            }
        }catch(e){/* noop */}
    }

    // tranca a largura do elemento ao tamanho que teria com `text`.
    // cria um clone invisível com o texto desejado, mede e aplica minWidth.
    function lockWidthToText(el, text){
        try{
            // guarda valor anterior
            el.dataset._prevMinWidth = el.style.minWidth || '';

            // cria um clone curto (sem filhos) para medir a largura exata incluindo padding
            const clone = el.cloneNode(false);
            clone.style.position = 'absolute';
            clone.style.left = '-9999px';
            clone.style.top = '-9999px';
            clone.style.visibility = 'hidden';
            clone.style.whiteSpace = 'nowrap';
            clone.textContent = text;
            document.body.appendChild(clone);
            const w = clone.offsetWidth;
            document.body.removeChild(clone);
            el.style.minWidth = w + 'px';
        }catch(e){
            // fallback simples
            lockWidth(el);
        }
    }

    function wait(ms, ctrl){
        return new Promise((resolve) => {
            const t = setTimeout(() => resolve(), ms);
            if (ctrl) ctrl.timers.push(t);
        });
    }

    async function eraseText(el, ctrl){
        while(el.textContent.length > 0){
            if (ctrl.cancelled) return;
            el.textContent = el.textContent.slice(0, -1);
            await wait(ERASE_DELAY, ctrl);
            if (ctrl.cancelled) return;
        }
    }

    async function typeText(el, text, ctrl){
        for(let i = 0; i < text.length; i++){
            if (ctrl.cancelled) return;
            el.textContent += text[i];
            await wait(TYPE_DELAY, ctrl);
            if (ctrl.cancelled) return;
        }
    }

    document.querySelectorAll('.topics').forEach((el) => {
        el.dataset.original = el.textContent.trim();
        el._ctrl = makeController();

        // refatorado: funções reutilizáveis para entrar/sair (permitindo ligar focus/blur)
        async function handleEnter(){
            const ctrl = el._ctrl;
            clearController(ctrl);
            ctrl.cancelled = false;
            const target = el.getAttribute('data-hover') || '';
            // nada a fazer se já está no texto alvo
            if (el.textContent === target) return;
            lockWidthToText(el, target);
            el.classList.add('typing');
            await eraseText(el, ctrl);
            if (ctrl.cancelled) { el.classList.remove('typing'); unlockWidth(el); return; }
            await typeText(el, target, ctrl);
            el.classList.remove('typing');
            unlockWidth(el);
        }

        async function handleLeave(){
            const ctrl = el._ctrl;
            clearController(ctrl);
            ctrl.cancelled = false;
            const original = el.dataset.original || '';
            // nada a fazer se já está no original
            if (el.textContent === original) return;
            lockWidthToText(el, original);
            el.classList.add('typing');
            await eraseText(el, ctrl);
            if (ctrl.cancelled) { el.classList.remove('typing'); unlockWidth(el); return; }
            await typeText(el, original, ctrl);
            el.classList.remove('typing');
            unlockWidth(el);
        }

        el.addEventListener('mouseenter', handleEnter);
        el.addEventListener('focus', handleEnter);
        el.addEventListener('mouseleave', handleLeave);
        el.addEventListener('blur', handleLeave);
    });
})();