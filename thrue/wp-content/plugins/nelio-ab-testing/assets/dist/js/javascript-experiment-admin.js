(()=>{var e={4184:(e,t)=>{var a;!function(){"use strict";var n={}.hasOwnProperty;function r(){for(var e=[],t=0;t<arguments.length;t++){var a=arguments[t];if(a){var i=typeof a;if("string"===i||"number"===i)e.push(a);else if(Array.isArray(a)){if(a.length){var o=r.apply(null,a);o&&e.push(o)}}else if("object"===i){if(a.toString!==Object.prototype.toString&&!a.toString.toString().includes("[native code]")){e.push(a.toString());continue}for(var s in a)n.call(a,s)&&a[s]&&e.push(s)}}}return e.join(" ")}e.exports?(r.default=r,e.exports=r):void 0===(a=function(){return r}.apply(t,[]))||(e.exports=a)}()}},t={};function a(n){var r=t[n];if(void 0!==r)return r.exports;var i=t[n]={exports:{}};return e[n](i,i.exports,a),i.exports}a.n=e=>{var t=e&&e.__esModule?()=>e.default:()=>e;return a.d(t,{a:t}),t},a.d=(e,t)=>{for(var n in t)a.o(t,n)&&!a.o(e,n)&&Object.defineProperty(e,n,{enumerable:!0,get:t[n]})},a.o=(e,t)=>Object.prototype.hasOwnProperty.call(e,t),a.r=e=>{"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})};var n={};(()=>{"use strict";a.r(n),window.wp.coreData,window.wp.domReady;const e=window.nab.data,t=window.wp.element,r=window.nab.experimentLibrary,i=window.wp.data,o=window.nab.editor,s=window.wp.compose,c=window.wp.url;var l=a(4184),d=a.n(l);const v=window.lodash,u=window.nab.utils,p=window.wp.components,m=window.wp.i18n;var b,f=function(e){var a=e.isSaving,n=e.save,r=_();return t.createElement("div",{className:"nab-javascript-editor-sidebar__actions"},t.createElement("div",{className:"nab-javascript-editor-sidebar__back-to-experiment"},t.createElement("a",{className:"nab-javascript-editor-sidebar__back-to-experiment-link",href:r,title:(0,m._x)("Back to test…","command","nelio-ab-testing")},t.createElement(p.Dashicon,{icon:"arrow-left-alt2"}))),t.createElement("div",{className:"nab-javascript-editor-sidebar__save-info"},a&&t.createElement("span",{className:"nab-javascript-editor-sidebar__saving-label"},t.createElement(p.Dashicon,{icon:"cloud"}),(0,m._x)("Saving…","text","nelio-ab-testing")),t.createElement(p.Button,{variant:"primary",disabled:a,onClick:n},(0,m._x)("Save and Preview","command","nelio-ab-testing"))))},_=function(){return(0,i.useSelect)((function(e){var t;return null===(t=e(o.STORE_NAME).getExperimentAttribute("links"))||void 0===t?void 0:t.edit}))},g=function(e){var a=e.value,n=e.onChange;return t.createElement("div",{className:"nab-javascript-editor-sidebar__editor"},t.createElement("textarea",{style:a?void 0:{whiteSpace:"pre-wrap"},placeholder:w,value:a,onChange:function(e){return n(e.target.value)},autoComplete:"off",autoCorrect:"off",autoCapitalize:"off",spellCheck:"false"}),!!(0,v.trim)(a)&&!/\bdone\(\)/.test((0,v.trim)(a))&&t.createElement("div",{className:"nab-javascript-editor-sidebar__editor-error"},(0,m._x)("“done()” not found","user","nelio-ab-testing")))},w=[(0,m._x)("Write your JavaScript snippet here. Here are some useful tips:","user","nelio-ab-testing"),"\n","\n- ",(0,m.sprintf)(/* translators: variable name */
(0,m._x)("Declare global variable “%s”","text","nelio-ab-testing"),"abc"),"\n  window.abc = abc;","\n","\n- ",(0,m._x)("Run callback when dom is ready","text","nelio-ab-testing"),"\n  utils.domReady( callback );","\n","\n- ",(0,m._x)("Show variant and track events","text","nelio-ab-testing"),"\n  done();"].join(""),E=function(){var a=(0,e.usePageAttribute)("javascript-preview/areControlsVisible",!0),n=a[0],r=a[1],i=(0,e.usePageAttribute)("javascript-preview/activeResolution","desktop"),o=i[0],s=i[1];return t.createElement("div",{className:"nab-javascript-editor-sidebar__footer-actions"},t.createElement("div",{className:d()({"nab-javascript-editor-sidebar__visibility-toggle":!0,"nab-javascript-editor-sidebar__visibility-toggle--hide":!!n,"nab-javascript-editor-sidebar__visibility-toggle--show":!n})},t.createElement(p.Button,{variant:"link",onClick:function(){return r(!n)}},n?t.createElement(t.Fragment,null,t.createElement(p.Dashicon,{icon:"admin-collapse"}),t.createElement("span",{className:"nab-javascript-editor-sidebar__visibility-toggle-label"},(0,m._x)("Hide Controls","command","nelio-ab-testing"))):t.createElement(p.Dashicon,{icon:"admin-collapse"}))),t.createElement("div",{className:"nab-javascript-editor-sidebar__resolutions"},t.createElement("div",{className:d()({"nab-javascript-editor-sidebar__resolution":!0,"nab-javascript-editor-sidebar__resolution--is-active":"desktop"===o})},t.createElement(p.Button,{variant:"link",onClick:function(){return s("desktop")}},t.createElement(p.Dashicon,{icon:"desktop"}),t.createElement("span",{className:"screen-reader-text"},(0,m._x)("Enter desktop preview mode","command","nelio-ab-testing")))),t.createElement("div",{className:d()({"nab-javascript-editor-sidebar__resolution":!0,"nab-javascript-editor-sidebar__resolution--is-active":"tablet"===o})},t.createElement(p.Button,{variant:"link",onClick:function(){return s("tablet")}},t.createElement(p.Dashicon,{icon:"tablet"}),t.createElement("span",{className:"screen-reader-text"},(0,m._x)("Enter tablet preview mode","command","nelio-ab-testing")))),t.createElement("div",{className:d()({"nab-javascript-editor-sidebar__resolution":!0,"nab-javascript-editor-sidebar__resolution--is-active":"mobile"===o})},t.createElement(p.Button,{variant:"link",onClick:function(){return s("mobile")}},t.createElement(p.Dashicon,{icon:"smartphone"}),t.createElement("span",{className:"screen-reader-text"},(0,m._x)("Enter mobile preview mode","command","nelio-ab-testing"))))))},j=function(){return j=Object.assign||function(e){for(var t,a=1,n=arguments.length;a<n;a++)for(var r in t=arguments[a])Object.prototype.hasOwnProperty.call(t,r)&&(e[r]=t[r]);return e},j.apply(this,arguments)},x=function(e){var a=e.className,n=e.alternativeId,r=e.isSaving,i=e.save,o=y(n),s=o[0],c=o[1];return t.createElement("div",{className:d()(["nab-javascript-editor-sidebar",a])},t.createElement(f,{isSaving:r,save:i}),t.createElement(g,{value:s,onChange:c}),t.createElement(E,null))},y=function(e){var t,a=(0,i.useSelect)((function(t){return t(o.STORE_NAME).getAlternative(e)})),n=(null===(t=null==a?void 0:a.attributes)||void 0===t?void 0:t.code)||"",r=(0,i.useDispatch)(o.STORE_NAME).setAlternative;return[n,function(e){a&&r(a.id,j(j({},a),{attributes:(0,u.omitUndefineds)(j(j({},a.attributes),{code:e}))}))}]},h=function(a){var n,r=a.className,i=a.iframeId,o=a.isSaving,s=a.previewUrl,c=(0,e.usePageAttribute)("javascript-preview/activeResolution","desktop")[0];return t.createElement("div",{className:d()([r,"nab-javascript-preview"])},t.createElement("iframe",{id:i,className:d()((n={"nab-javascript-preview__iframe":!0},n["nab-javascript-preview__iframe--".concat(c)]=!0,n["nab-javascript-preview__iframe--is-saving"]=o,n)),title:(0,m._x)("JavaScript Preview","text","nelio-ab-testing"),src:s}))},S=function(a){var n=a.alternativeId,r=(0,s.useInstanceId)(S),i="nab-javascript-previewer__iframe-".concat(r),o=(0,e.usePageAttribute)("javascript-preview/areControlsVisible",!0)[0],c=N(n),l=k(),v=A(i),u=v[0],p=v[1];return t.createElement("div",{className:"nab-javascript-editor"},t.createElement(x,{className:d()({"nab-javascript-editor__sidebar":!0,"nab-javascript-editor__sidebar--is-collapsed":!o}),alternativeId:n,isSaving:u,save:p}),t.createElement(h,{key:"nab-javascript-editor__preview",className:d()({"nab-javascript-editor__preview":!0,"nab-javascript-editor__preview--is-fullscreen":!o}),iframeId:i,isSaving:u,previewUrl:l,value:c}))},N=function(e){return(0,i.useSelect)((function(t){var a,n;return(null===(n=null===(a=t(o.STORE_NAME).getAlternative(e))||void 0===a?void 0:a.attributes)||void 0===n?void 0:n.code)||""}))},k=function(){return(0,i.useSelect)((function(e){var t=(0,e(o.STORE_NAME).getAlternative)("control");if(t){var a=e(o.STORE_NAME),n=a.getAlternatives,r=a.getExperimentId,i=(0,c.getQueryArgs)(document.location.href).alternative||"",s=n(),l=r(),d=(0,v.indexOf)((0,v.map)(s,"id"),i),u=t.links&&t.links.preview||"/",p=(0,c.removeQueryArgs)(u,"nab-preview","experiment","alternative","timestamp","nabnonce");return(0,c.addQueryArgs)(p,{"nab-javascript-previewer":"".concat(l,":").concat(d)})}}))},A=function(t){var a=(0,i.useSelect)((function(t){return!!t(e.STORE_NAME).getPageAttribute("javascript-preview/isLoading")})),n=(0,i.useDispatch)(e.STORE_NAME).setPageAttribute,r=(0,i.useDispatch)(o.STORE_NAME).saveExperiment;return[a,function(){n("javascript-preview/isLoading",!0),r().then((function(){var e,a=document.getElementById(t);null===(e=null==a?void 0:a.contentWindow)||void 0===e||e.location.reload(),setTimeout((function(){return n("javascript-preview/isLoading",!1)}),5e3)}))}]},O=function(a){var n=a.experimentId,r=a.alternativeId,s=(0,i.useSelect)((function(t){return t(e.STORE_NAME).getExperiment(n)}));return s?t.createElement(t.StrictMode,null,t.createElement(o.EditorProvider,{experiment:s},t.createElement(S,{alternativeId:r}))):null},P=function(){return P=Object.assign||function(e){for(var t,a=1,n=arguments.length;a<n;a++)for(var r in t=arguments[a])Object.prototype.hasOwnProperty.call(t,r)&&(e[r]=t[r]);return e},P.apply(this,arguments)};window.nab=P(P({},(b=window)&&"object"==typeof b&&"nab"in b?window.nab:{}),{initJavaScriptEditorPage:function(e,a){(0,r.registerCoreExperiments)();var n=document.getElementById(e);if(n){var i,o,s=a.experimentId,c=a.alternativeId;i=t.createElement(O,{experimentId:s,alternativeId:c}),(o=n)&&(t.createRoot?(0,t.createRoot)(o).render(i):(0,t.render)(i,o))}}})})();var r=nab="undefined"==typeof nab?{}:nab;for(var i in n)r[i]=n[i];n.__esModule&&Object.defineProperty(r,"__esModule",{value:!0})})();