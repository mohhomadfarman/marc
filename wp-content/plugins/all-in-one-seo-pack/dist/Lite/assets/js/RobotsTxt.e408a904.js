import{m as v,b as f}from"./index.506b73e8.js";import{g as A,f as B,w as s,n as b}from"./runtime-dom.esm-bundler.5c3c7d72.js";const y=()=>{var c;const t=v(),l=f(),a=A([]),n=B(()=>{var e;return((e=t.currentSite)==null?void 0:e.blog_id)==="network"?l.networkOptions:l.options});t.networkRobots.rules=((c=t.currentSite)==null?void 0:c.blog_id)==="network"?t.getNetworkRobots.rules:l.options.tools.robots.rules;const u=(e,o)=>{const r=["AdsBot","Google-Extended","GPTBot","CCBot"];e&&a.value.push(JSON.stringify({userAgent:o,directive:"disallow",fieldValue:"/",readOnly:!0,bot:!0})),a.value=a.value.filter(i=>o!==JSON.parse(i).userAgent),e&&a.value.push(JSON.stringify({userAgent:o,directive:"disallow",fieldValue:"/",readOnly:!0,bot:!0})),a.value.sort((i,p)=>{const g=JSON.parse(i).userAgent,w=JSON.parse(p).userAgent;return r.indexOf(g)-r.indexOf(w)}),t.networkRobots.rules=[...a.value,...t.networkRobots.rules.filter(i=>!JSON.parse(i).bot)]},d=e=>{let o=[];e&&(o=[JSON.stringify({userAgent:"*",directive:"disallow",fieldValue:"/?s=",readOnly:!0,preventCrawling:!0}),JSON.stringify({userAgent:"*",directive:"disallow",fieldValue:"/page/*/?s=",readOnly:!0,preventCrawling:!0}),JSON.stringify({userAgent:"*",directive:"disallow",fieldValue:"/search/",readOnly:!0,preventCrawling:!0})]),t.networkRobots.rules=[...o,...t.networkRobots.rules.filter(r=>!JSON.parse(r).preventCrawling)]};s(()=>t.networkRobots.rules,async()=>{var e;((e=t.currentSite)==null?void 0:e.blog_id)==="network"?l.networkOptions.tools.robots.rules=t.networkRobots.rules:l.options.tools.robots.rules=t.networkRobots.rules,await b(),window.aioseoBus.$emit("validate-robots-txt")},{deep:!0}),s(()=>n.value.searchAppearance.advanced.unwantedBots.all,e=>{[{name:"AdsBot",slug:"googleAdsBot"},{name:"Google-Extended",slug:"googleGeminiVertexAiBots"},{name:"GPTBot",slug:"openAiGptBot"},{name:"CCBot",slug:"commonCrawlCcBot"}].forEach(r=>{u(e||n.value.searchAppearance.advanced.unwantedBots.settings[r.slug],r.name)})}),s(()=>n.value.searchAppearance.advanced.unwantedBots.settings.googleAdsBot,e=>{n.value.searchAppearance.advanced.unwantedBots.all||u(e,"AdsBot")}),s(()=>n.value.searchAppearance.advanced.unwantedBots.settings.googleGeminiVertexAiBots,e=>{n.value.searchAppearance.advanced.unwantedBots.all||u(e,"Google-Extended")}),s(()=>n.value.searchAppearance.advanced.unwantedBots.settings.openAiGptBot,e=>{n.value.searchAppearance.advanced.unwantedBots.all||u(e,"GPTBot")}),s(()=>n.value.searchAppearance.advanced.unwantedBots.settings.commonCrawlCcBot,e=>{n.value.searchAppearance.advanced.unwantedBots.all||u(e,"CCBot")}),s(()=>n.value.searchAppearance.advanced.searchCleanup.settings.preventCrawling,e=>{d(e)})};export{y as u};
