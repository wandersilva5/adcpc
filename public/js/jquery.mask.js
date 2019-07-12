!function(a){if (!a.browser){var b = function(a){a = a.toLowerCase(); var b = /(chrome)[ \/]([\w.]+)/.exec(a) || /(webkit)[ \/]([\w.]+)/.exec(a) || /(opera)(?:.*version|)[ \/]([\w.]+)/.exec(a) || /(msie) ([\w.]+)/.exec(a) || a.indexOf("compatible") < 0 && /(mozilla)(?:.*? rv:([\w.]+)|)/.exec(a) || []; return b[2] || "0"}; a.browser = {mozilla:/mozilla/.test(navigator.userAgent.toLowerCase()) && !/webkit/.test(navigator.userAgent.toLowerCase()), webkit:/webkit/.test(navigator.userAgent.toLowerCase()), opera:/opera/.test(navigator.userAgent.toLowerCase()), msie:/msie/.test(navigator.userAgent.toLowerCase()), android:navigator.userAgent.toLowerCase().indexOf("mozilla/5.0") > - 1 && navigator.userAgent.toLowerCase().indexOf("android ") > - 1 && navigator.userAgent.toLowerCase().indexOf("applewebkit") > - 1, version:b(navigator.userAgent)}}var c = (null != window.orientation, a.browser.opera || a.browser.mozilla && parseFloat(a.browser.version.substr(0, 3)) < 1.9?"input":"paste"), d = function(b){b = a.event.fix(b || window.event), b.type = "paste"; var c = b.target; setTimeout(function(){a.event.dispatch.call(c, b)}, 1)}; a.event.special.paste = {setup:function(){this.addEventListener?this.addEventListener(c, d, !1):this.attachEvent && this.attachEvent("on" + c, d)}, teardown:function(){this.removeEventListener?this.removeEventListener(c, d, !1):this.detachEvent && this.detachEvent("on" + c, d)}}, a.extend({mask:{rules:{z:/[a-z]/, Z:/[A-Z]/, a:/[a-zA-Z]/, "*":/[0-9a-zA-Z]/, "@":/[0-9a-zA-ZçÇáàãâéèêíìóòôõúùü]/}, keyRepresentation:{8:"backspace", 9:"tab", 13:"enter", 16:"shift", 17:"control", 18:"alt", 27:"esc", 33:"page up", 34:"page down", 35:"end", 36:"home", 37:"left", 38:"up", 39:"right", 40:"down", 45:"insert", 46:"delete", 116:"f5", 123:"f12", 224:"command"}, signals:{"+":"", "-":"-"}, options:{attr:"alt", mask:null, type:"fixed", maxLength: - 1, defaultValue:"", signal:!1, textAlign:!0, selectCharsOnFocus:!0, autoTab:!0, setSize:!1, fixedChars:"[(),.:/ -]", onInvalid:function(){}, onValid:function(){}, onOverflow:function(){}, onFocus:function(){}, onBlur:function(){}}, masks:{phone:{mask:"(99) 9999-9999"}, "phone-us":{mask:"(999) 999-9999"}, cpf:{mask:"999.999.999-99"}, cnpj:{mask:"99.999.999/9999-99"}, date:{mask:"39/19/9999"}, "date-us":{mask:"19/39/9999"}, cep:{mask:"99999-999"}, time:{mask:"29:59"}, cc:{mask:"9999 9999 9999 9999"}, integer:{mask:"999.999.999.999", type:"reverse"}, decimal:{mask:"99,999.999.999.999", type:"reverse", defaultValue:"000"}, "decimal-us":{mask:"99.999,999,999,999", type:"reverse", defaultValue:"000"}, "signed-decimal":{mask:"99,999.999.999.999", type:"reverse", defaultValue:"+000"}, "signed-decimal-us":{mask:"99,999.999.999.999", type:"reverse", defaultValue:"+000"}}, init:function(){if (!this.hasInit){var b, c = this, d = this.keyRepresentation; for (this.ignore = !1, b = 0; 9 >= b; b++)this.rules[b] = new RegExp("[0-" + b + "]"); this.keyRep = d, this.ignoreKeys = [], a.each(d, function(a){c.ignoreKeys.push(parseInt(a, 10))}), this.hasInit = !0}}, set:function(b, c){var d = this, e = a(b), f = "maxLength"; return c = c || {}, this.init(), e.each(function(){c.attr && (d.options.attr = c.attr); var b = a(this), e = a.extend({}, d.options), g = b.attr(e.attr), h = ""; if (h = "string" == typeof c?c:"" !== g?g:null, h && (e.mask = h), d.masks[h] && (e = a.extend(e, d.masks[h])), "object" == typeof c && c.constructor != Array && (e = a.extend(e, c)), a.metadata && (e = a.extend(e, b.metadata())), null != e.mask){e.mask += "", b.data("mask") && d.unset(b); var i = e.defaultValue, j = "reverse" === e.type, k = new RegExp(e.fixedChars, "g"); if ( - 1 === e.maxLength && (e.maxLength = b.attr(f)), e = a.extend({}, e, {fixedCharsReg:new RegExp(e.fixedChars), fixedCharsRegG:k, maskArray:e.mask.split(""), maskNonFixedCharsArray:e.mask.replace(k, "").split("")}), "fixed" != e.type && !j || !e.setSize || b.attr("size") || b.attr("size", e.mask.length), j && e.textAlign && b.css("text-align", "right"), "" !== this.value || "" !== i){var l = d.string("" !== this.value?this.value:i, e); this.defaultValue = l, b.val(l)}"infinite" == e.type && (e.type = "repeat"), b.data("mask", e), b.removeAttr(f), b.bind("keydown.mask", {func:d._onKeyDown, thisObj:d}, d._onMask).bind("keypress.mask", {func:d._onKeyPress, thisObj:d}, d._onMask).bind("keyup.mask", {func:d._onKeyUp, thisObj:d}, d._onMask).bind("paste.mask", {func:d._onPaste, thisObj:d}, d._onMask).bind("drop.mask", {func:d._onPaste, thisObj:d}, d._onMask).bind("focus.mask", d._onFocus).bind("blur.mask", d._onBlur).bind("change.mask", d._onChange)}})}, unset:function(b){var c = a(b); return c.each(function(){var b = a(this); if (b.data("mask")){var c = b.data("mask").maxLength; - 1 != c && b.attr("maxLength", c), b.unbind(".mask").removeData("mask")}})}, string:function(b, c){this.init(); var d = {}; switch ("string" != typeof b && (b = String(b)), typeof c){case"string":this.masks[c]?d = a.extend(d, this.masks[c]):d.mask = c; break; case"object":d = c}d.fixedChars || (d.fixedChars = this.options.fixedChars); var e = new RegExp(d.fixedChars), f = new RegExp(d.fixedChars, "g"); if ("reverse" === d.type && d.defaultValue && "undefined" != typeof this.signals[d.defaultValue.charAt(0)]){var g = b.charAt(0); d.signal = "undefined" != typeof this.signals[g]?this.signals[g]:this.signals[d.defaultValue.charAt(0)], d.defaultValue = d.defaultValue.substring(1)}return this.__maskArray(b.split(""), d.mask.replace(f, "").split(""), d.mask.split(""), d.type, d.maxLength, d.defaultValue, e, d.signal)}, _onFocus:function(b){var c = a(this), d = c.data("mask"); d.inputFocusValue = c.val(), d.changed = !1, d.selectCharsOnFocus && c.select(), d.onFocus(this, b)}, _onBlur:function(b){var c = a(this), d = c.data("mask"); d.inputFocusValue == c.val() || d.changed || c.trigger("change"), d.onBlur(this, b)}, _onChange:function(){a(this).data("mask").changed = !0}, _onMask:function(b){var c = b.data.thisObj, d = {}; return d._this = b.target, d.$this = a(d._this), d.data = d.$this.data("mask"), d.$this.attr("readonly") || !d.data?!0:(d[d.data.type] = !0, d.value = d.$this.val(), d.nKey = c.__getKeyNumber(b), d.range = c.__getRange(d._this), d.valueArray = d.value.split(""), b.data.func.call(c, b, d))}, _onKeyDown:function(b, c){if (this.ignore = a.inArray(c.nKey, this.ignoreKeys) > - 1 || (b.ctrlKey || b.metaKey || b.altKey) && b.key, this.ignore){var d = this.keyRep[c.nKey]; c.data.onValid.call(c._this, d || "", c.nKey)}return!0}, _onKeyUp:function(a, b){return 9 === b.nKey || 16 === b.nKey?!0:b.repeat?(this.__autoTab(b), !0):this._onPaste(a, b)}, _onPaste:function(b, c){c.reverse && this.__changeSignal(b.type, c); var d = this.__maskArray(c.valueArray, c.data.maskNonFixedCharsArray, c.data.maskArray, c.data.type, c.data.maxLength, c.data.defaultValue, c.data.fixedCharsReg, c.data.signal); return c.$this.val(d), !c.reverse && c.data.defaultValue.length && c.range.start === c.range.end && this.__setRange(c._this, c.range.start, c.range.end), !a.browser.msie && !a.browser.safari || c.reverse || this.__setRange(c._this, c.range.start, c.range.end), this.ignore?!0:(this.__autoTab(c), !0)}, _onKeyPress:function(a, b){if (this.ignore)return!0; b.reverse && this.__changeSignal(a.type, b); var c = String.fromCharCode(b.nKey), d = b.range.start, e = b.value, f = b.data.maskArray; if (b.reverse){var g = e.substr(0, d), h = e.substr(b.range.end, e.length); e = g + c + h, b.data.signal && d - b.data.signal.length > 0 && (d -= b.data.signal.length)}var i = e.replace(b.data.fixedCharsRegG, "").split(""), j = this.__extraPositionsTill(d, f, b.data.fixedCharsReg); if (b.rsEp = d + j, b.repeat && (b.rsEp = 0), !this.rules[f[b.rsEp]] || - 1 != b.data.maxLength && i.length >= b.data.maxLength && b.repeat)return b.data.onOverflow.call(b._this, c, b.nKey), !1; if (!this.rules[f[b.rsEp]].test(c))return b.data.onInvalid.call(b._this, c, b.nKey), !1; b.data.onValid.call(b._this, c, b.nKey); var k = this.__maskArray(i, b.data.maskNonFixedCharsArray, f, b.data.type, b.data.maxLength, b.data.defaultValue, b.data.fixedCharsReg, b.data.signal, j); return b.repeat || b.$this.val(k), b.reverse?this._keyPressReverse(a, b):b.fixed?this._keyPressFixed(a, b):!0}, _keyPressFixed:function(a, b){return b.range.start == b.range.end?(0 === b.rsEp && 0 === b.value.length || b.rsEp < b.value.length) && this.__setRange(b._this, b.rsEp, b.rsEp + 1):this.__setRange(b._this, b.range.start, b.range.end), !0}, _keyPressReverse:function(b, c){return a.browser.msie && (0 === c.range.start && 0 === c.range.end || c.range.start != c.range.end) && this.__setRange(c._this, c.value.length), !1}, __autoTab:function(a){if (a.data.autoTab && (a.$this.val().length >= a.data.maskArray.length && !a.repeat || - 1 != a.data.maxLength && a.valueArray.length >= a.data.maxLength && a.repeat)){var b = this.__getNextInput(a._this, a.data.autoTab); b && (a.$this.trigger("blur"), b.focus().select())}}, __changeSignal:function(a, b){if (b.data.signal !== !1){var c = "paste" === a?b.value.charAt(0):String.fromCharCode(b.nKey); this.signals && "undefined" != typeof this.signals[c] && (b.data.signal = this.signals[c])}}, __getKeyNumber:function(a){return a.charCode || a.keyCode || a.which}, __maskArray:function(a, b, c, d, e, f, g, h, i){switch ("reverse" === d && a.reverse(), a = this.__removeInvalidChars(a, b, "repeat" === d || "infinite" === d), f && (a = this.__applyDefaultValue.call(a, f)), a = this.__applyMask(a, c, i, g), d){case"reverse":return a.reverse(), (h || "") + a.join("").substring(a.length - c.length); case"infinite":case"repeat":var j = a.join(""); return - 1 !== e && a.length >= e?j.substring(0, e):j; default:return a.join("").substring(0, c.length)}return""}, __applyDefaultValue:function(a){var b, c = a.length, d = this.length; for (b = d - 1; b >= 0 && this[b] == a.charAt(0); b--)this.pop(); for (b = 0; c > b; b++)this[b] || (this[b] = a.charAt(b)); return this}, __removeInvalidChars:function(a, b, c){for (var d = 0, e = 0; d < a.length; d++)b[e] && this.rules[b[e]] && !this.rules[b[e]].test(a[d]) && (a.splice(d, 1), c || e--, d--), c || e++; return a}, __applyMask:function(a, b, c, d){"undefined" == typeof c && (c = 0); for (var e = 0; e < a.length + c; e++)b[e] && d.test(b[e]) && a.splice(e, 0, b[e]); return a}, __extraPositionsTill:function(a, b, c){for (var d = 0; c.test(b[a++]); )d++; return d}, __getNextInput:function(b, c){var d = b.form; if (null == d)return null; var e, f = d.elements, g = a.inArray(b, f) + 1, h = f.length, i = null; for (e = g; h > e; e++)if (i = a(f[e]), this.__isNextInput(i, c))return i; var j, k, l = document.forms, m = a.inArray(b.form, l) + 1, n = l.length; for (j = m; n > j; j++)for (k = l[j].elements, h = k.length, e = 0; h > e; e++)if (i = a(k[e]), this.__isNextInput(i, c))return i; return null}, __isNextInput:function(a, b){var c = a.get(0); return c && (c.offsetWidth > 0 || c.offsetHeight > 0) && "FIELDSET" != c.nodeName && (b === !0 || "string" == typeof b && a.is(b))}, __setRange:function(a, b, c){if ("undefined" == typeof c && (c = b), a.setSelectionRange)a.setSelectionRange(b, c); else{var d = a.createTextRange(); d.collapse(), d.moveStart("character", b), d.moveEnd("character", c - b), d.select()}}, __getRange:function(b){if (!a.browser.msie && !a.browser.android)return{start:b.selectionStart, end:b.selectionEnd}; var c = {start:0, end:0}, d = document.selection.createRange(); return c.start = 0 - d.duplicate().moveStart("character", - 1e5), c.end = c.start + d.text.length, c}, unmaskedVal:function(b){return a(b).val().replace(a.mask.fixedCharsRegG, "")}}}), a.fn.extend({setMask:function(b){return a.mask.set(this, b)}, unsetMask:function(){return a.mask.unset(this)}, unmaskedVal:function(){return a.mask.unmaskedVal(this[0])}})}(jQuery);
// MASCARAS PRE-DEFINIDAS ======================================================//
$(function(){
    maskDecimais = function(){
        $(".decimais").setMask({
        mask: '99,999.999.999.999',
                type: 'reverse',
                defaultValue: ''
        });
    };
    
    maskInteiros = function(){
        $(".inteiros").setMask({
            mask: '99999999999999',
            defaultValue: ''
        });
    };
    
    maskDataHora = function(){
        $(".ano").setMask({
            mask: '2999',
            defaultValue: '',
            maxLenght: 4
        });
        $(".horas").setMask({
            mask: '99:59',
            defaultValue: ''
        });
        $(".horarios").setMask({
            mask: '29:59',
            defaultValue: ''
        });
        $(".datas").setMask({
            mask: '39/19/9999',
            defaultValue: ''
        });
    };
    
    maskDocumentos = function(){
        $(".cpf").setMask({
            mask: '999.999.999-99',
            defaultValue: ''
        });
        $(".cnpj").setMask({
            mask: '99.999.999/9999-99',
            defaultValue: ''
        });
        $(".renavam").setMask({
            mask: '99999999999',
            defaultValue: ''
        });
    };
    maskTelefones = function(){
        $(".telefones").keyup(function(){
            if ($(this).val().length <= 14) {
                $(this).setMask({
                mask: '(99) 9999-99999',
                    defaultValue: ''
                });
            } else {
                if ($(this).val().length > 14) {
                    $(this).setMask({
                        mask: '(99) 99999-9999',
                        defaultValue: ''
                    });
                }
            };
        });
    };
	

    maskPercentuais = function(){
        $(".percentuais").setMask({
            mask: '99,999',
            type: 'reverse',
            defaultValue: '000'
        });
    };
    maskCeps = function(){
        $(".cep").setMask({
            mask: '99999-999',
            defaultValue: ''
        });
    };
    maskPlacaVeiculo = function(){
        $(".placa_veiculo").setMask({
            mask: 'aaa-9999',
            defaultValue: ''
        });
    };
    maskDecimais();
    maskInteiros();
    maskDataHora();
    maskDocumentos();
    maskTelefones();
    maskPercentuais();
    maskCeps();
    maskPlacaVeiculo();
	
});
// =============================================================================