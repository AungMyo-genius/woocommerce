(()=>{"use strict";var e={};function t(e){return(t="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(e){return typeof e}:function(e){return e&&"function"==typeof Symbol&&e.constructor===Symbol&&e!==Symbol.prototype?"symbol":typeof e})(e)}function n(e,t){if(!(e instanceof t))throw new TypeError("Cannot call a class as a function")}function r(e,t){for(var n=0;n<t.length;n++){var r=t[n];r.enumerable=r.enumerable||!1,r.configurable=!0,"value"in r&&(r.writable=!0),Object.defineProperty(e,r.key,r)}}function i(e,t,n){return(i="undefined"!=typeof Reflect&&Reflect.get?Reflect.get:function(e,t,n){var r=function(e,t){for(;!Object.prototype.hasOwnProperty.call(e,t)&&null!==(e=a(e)););return e}(e,t);if(r){var i=Object.getOwnPropertyDescriptor(r,t);return i.get?i.get.call(n):i.value}})(e,t,n||e)}function o(e,t){return(o=Object.setPrototypeOf||function(e,t){return e.__proto__=t,e})(e,t)}function l(e){var t=function(){if("undefined"==typeof Reflect||!Reflect.construct)return!1;if(Reflect.construct.sham)return!1;if("function"==typeof Proxy)return!0;try{return Boolean.prototype.valueOf.call(Reflect.construct(Boolean,[],(function(){}))),!0}catch(e){return!1}}();return function(){var n,r=a(e);if(t){var i=a(this).constructor;n=Reflect.construct(r,arguments,i)}else n=r.apply(this,arguments);return s(this,n)}}function s(e,n){return!n||"object"!==t(n)&&"function"!=typeof n?function(e){if(void 0===e)throw new ReferenceError("this hasn't been initialised - super() hasn't been called");return e}(e):n}function a(e){return(a=Object.setPrototypeOf?Object.getPrototypeOf:function(e){return e.__proto__||Object.getPrototypeOf(e)})(e)}e.d=(t,n)=>{for(var r in n)e.o(n,r)&&!e.o(t,r)&&Object.defineProperty(t,r,{enumerable:!0,get:n[r]})},e.o=(e,t)=>Object.prototype.hasOwnProperty.call(e,t);var u=function(e){!function(e,t){if("function"!=typeof t&&null!==t)throw new TypeError("Super expression must either be null or a function");e.prototype=Object.create(t&&t.prototype,{constructor:{value:e,writable:!0,configurable:!0}}),t&&o(e,t)}(d,elementorModules.frontend.handlers.Base);var t,s,u,c=l(d);function d(){return n(this,d),c.apply(this,arguments)}return t=d,(s=[{key:"onInit",value:function(){i(a(d.prototype),"onInit",this).call(this),this.init()}},{key:"init",value:function(){this.isEdit&&Selleradise.lazyLoad();var e={default:null,standard:null};e.default=new Swiper(".selleradise_Testimonials--default__profiles",{spaceBetween:10,slidesPerView:2,watchSlidesVisibility:!0,watchSlidesProgress:!0,lazy:{loadPrevNext:!1},breakpoints:{768:{slidesPerView:4,direction:"vertical"}}}),new Swiper(".selleradise_Testimonials--default__quotes",{duration:600,spaceBetween:50,autoHeight:!0,lazy:{loadPrevNext:!1},keyboard:{enabled:!1},navigation:{nextEl:".selleradise_Testimonials--default .selleradise_widgets__slider-button--right",prevEl:".selleradise_Testimonials--default .selleradise_widgets__slider-button--left"},breakpoints:{768:{direction:"vertical",spaceBetween:0,autoHeight:!1}},thumbs:{swiper:e.default}}),new Swiper(".selleradise_Testimonials--cards__quotes",{duration:600,spaceBetween:20,slidesPerView:1.2,autoHeight:!0,navigation:{nextEl:".selleradise_Testimonials--cards .selleradise_widgets__slider-button--right",prevEl:".selleradise_Testimonials--cards .selleradise_widgets__slider-button--left"},breakpoints:{768:{slidesPerView:3.5,spaceBetween:50}}}),new Swiper(".selleradise_Testimonials--standard__quotes",{duration:600,slidesPerView:1,autoHeight:!0,navigation:{nextEl:".selleradise_Testimonials--standard .selleradise_widgets__slider-button--right",prevEl:".selleradise_Testimonials--standard .selleradise_widgets__slider-button--left"},breakpoints:{768:{}}})}}])&&r(t.prototype,s),u&&r(t,u),d}();jQuery(window).on("elementor/frontend/init",(function(){elementorFrontend.hooks.addAction("frontend/element_ready/selleradise-testimonials.default",(function(e){elementorFrontend.elementsHandler.addHandler(u,{$element:e})}))}))})();