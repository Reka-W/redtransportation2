!function(){"use strict";var e;e=()=>{const e=document.querySelectorAll(".wp-block-themeisle-blocks-tabs");let t=!1;const c=[];var s,l;e.forEach((e=>{const s=Array.from(e.querySelectorAll(":scope > .wp-block-themeisle-blocks-tabs__content > .wp-block-themeisle-blocks-tabs-item")),l=document.createElement("div");l.classList.add("wp-block-themeisle-blocks-tabs__header"),e.prepend(l),s.forEach(((e,a)=>{const o=document.createElement("div");o.classList.add("wp-block-themeisle-blocks-tabs__header_item");const d=e.querySelector(":scope > .wp-block-themeisle-blocks-tabs-item__content");"true"!==e.dataset.defaultOpen||t?c.push({headerItem:o,content:d}):(o.classList.add("active"),d.classList.add("active"),t=!0),o.innerHTML=e.dataset.title||"Untitled Tab",o.tabIndex=0;const n=e.querySelector(".wp-block-themeisle-blocks-tabs-item__header"),i=(e,t)=>{const c=e.querySelector(":scope > .wp-block-themeisle-blocks-tabs-item__content"),s=e.querySelector(":scope > .wp-block-themeisle-blocks-tabs-item__header");c.classList.toggle("active",t===a),c.classList.toggle("hidden",t!==a),s.classList.toggle("active",t===a),s.classList.toggle("hidden",t!==a),Array.from(l.childNodes).forEach(((e,t)=>{e.classList.toggle("active",t===a),e.classList.toggle("hidden",t!==a)}))};o.addEventListener("click",(()=>s.forEach(i))),o.addEventListener("keyup",(e=>{"Enter"===e.code&&(e.preventDefault(),s.forEach(i))})),n.addEventListener("click",(()=>s.forEach(i))),n.addEventListener("keyup",(e=>{"Enter"===e.code&&(e.preventDefault(),s.forEach(i))})),l.appendChild(o)}))})),t||(null==c||null===(s=c[0])||void 0===s||s.headerItem.classList.add("active"),null==c||null===(l=c[0])||void 0===l||l.content.classList.add("active"))},"undefined"!=typeof document&&("complete"!==document.readyState&&"interactive"!==document.readyState?document.addEventListener("DOMContentLoaded",e):e())}();