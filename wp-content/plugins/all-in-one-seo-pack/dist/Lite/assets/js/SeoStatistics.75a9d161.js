import{i as v,k as H,u as q,l as B}from"./index.506b73e8.js";import{u as z}from"./vue3-apexcharts.57b6886c.js";import{C as I}from"./Blur.edde4939.js";import{C as M}from"./Card.d0e52e4a.js";import{G as U}from"./Graph.7231000e.js";import{G as E,a as G}from"./Row.df38a5f6.js";import{P as O}from"./PostsTable.a8b4a71c.js";import{S as N}from"./SeoStatisticsOverview.3de3a0bf.js";import"./translations.d159963e.js";import{_ as D}from"./_plugin-vue_export-helper.eefbdd86.js";import{_ as l}from"./default-i18n.20001971.js";import{v as n,o as d,k as b,l as o,a as L,C as a,x as y,t as w,c as F,u as s,b as x}from"./runtime-dom.esm-bundler.5c3c7d72.js";import{C as V}from"./Index.a76253da.js";import{R as A}from"./RequiredPlans.2a42646b.js";import{r as W}from"./params.af7ed354.js";import{u as $}from"./License.ec356fc9.js";import"./helpers.53868b98.js";import"./Tooltip.73441134.js";import"./Caret.a21d4ca8.js";import"./index.b359096c.js";import"./Slide.39c07c03.js";import"./numbers.9fc174f3.js";import"./PostTypes.dafa8837.js";import"./Statistic.906a3363.js";import"./_baseClone.f4be2bb9.js";import"./_arrayEach.6af5abac.js";import"./_getTag.1e50d0c4.js";import"./vue-router.2f910c93.js";import"./datetime.f197aeae.js";import"./WpTable.eeba825e.js";import"./ScrollTo.81bea8a7.js";import"./license.857c8098.js";import"./upperFirst.2cd99bdd.js";import"./_stringToArray.f9ddb970.js";import"./toString.f0787db8.js";import"./ScoreButton.c4b37708.js";import"./Table.adfd78ac.js";import"./Download.17eb5e1f.js";import"./IndexStatus.944af9c5.js";import"./CheckSolid.a0a6d7e0.js";import"./Calendar.b69b61c4.js";import"./Mobile.ada2591a.js";import"./Checkmark.e40641dd.js";import"./ExclamationSolid.4ca1f801.js";import"./Link.8ca9d57c.js";import"./constants.a8a14dc3.js";import"./addons.9611ac49.js";const m="all-in-one-seo-pack",j={setup(){return{searchStatisticsStore:v()}},components:{CoreBlur:I,CoreCard:M,Graph:U,GridColumn:E,GridRow:G,PostsTable:O,SeoStatisticsOverview:N},data(){return{strings:{seoStatisticsCard:l("SEO Statistics",m),seoStatisticsTooltip:l("The following SEO Statistics graphs are useful metrics for understanding the visibility of your website or pages in search results and can help you identify trends or changes over time.<br /><br />Note: This data is capped at the top 100 keywords per day to speed up processing and to help you prioritize your SEO efforts, so while the data may seem inconsistent with Google Search Console, this is intentional.",m),contentCard:l("Content",m),postsTooltip:l("These lists can be useful for understanding the performance of specific pages or posts and identifying opportunities for improvement. For example, the top winning content may be good candidates for further optimization or promotion, while the top losing may need to be reevaluated and potentially updated.",m)},defaultPages:{rows:[],totals:{page:0,pages:0,total:0}}}},computed:{series(){var c,e,r,i;return!((e=(c=this.searchStatisticsStore.data)==null?void 0:c.seoStatistics)!=null&&e.statistics)||!((i=(r=this.searchStatisticsStore.data)==null?void 0:r.seoStatistics)!=null&&i.intervals)?[]:[{name:l("Search Impressions",m),data:this.searchStatisticsStore.data.seoStatistics.intervals.map(t=>({x:t.date,y:t.impressions})),legend:{total:this.searchStatisticsStore.data.seoStatistics.statistics.impressions}},{name:l("Search Clicks",m),data:this.searchStatisticsStore.data.seoStatistics.intervals.map(t=>({x:t.date,y:t.clicks})),legend:{total:this.searchStatisticsStore.data.seoStatistics.statistics.clicks}}]}}},J={class:"aioseo-search-statistics-dashboard"},K=["innerHTML"];function Q(c,e,r,i,t,S){const f=n("seo-statistics-overview"),C=n("graph"),g=n("core-card"),k=n("posts-table"),T=n("grid-column"),P=n("grid-row"),u=n("core-blur");return d(),b(u,null,{default:o(()=>[L("div",J,[a(P,null,{default:o(()=>[a(T,null,{default:o(()=>[a(g,{class:"aioseo-seo-statistics-card",slug:"seoPerformance","header-text":t.strings.seoStatisticsCard,toggles:!1,"no-slide":""},{tooltip:o(()=>[L("span",{innerHTML:t.strings.seoStatisticsTooltip},null,8,K)]),default:o(()=>[a(f,{statistics:["impressions","clicks","ctr","position"],"show-graph":!1,view:"side-by-side"}),a(C,{"multi-axis":"",series:S.series,"legend-style":"simple"},null,8,["series"])]),_:1},8,["header-text"]),a(g,{slug:"posts","header-text":t.strings.contentCard,toggles:!1,"no-slide":""},{tooltip:o(()=>[y(w(t.strings.postsTooltip),1)]),default:o(()=>{var p,_,R;return[a(k,{posts:((R=(_=(p=i.searchStatisticsStore.data)==null?void 0:p.seoStatistics)==null?void 0:_.pages)==null?void 0:R.paginated)||t.defaultPages,columns:["postTitle","indexStatus","seoScore","clicksSortable","impressionsSortable","positionSortable","diffPositionSortable"],"show-items-per-page":"","show-table-footer":""},null,8,["posts"])]}),_:1},8,["header-text"])]),_:1})]),_:1})])]),_:1})}const X=D(j,[["render",Q]]),Y={class:"aioseo-search-statistics-seo-statistics"},Z={__name:"Index",setup(c){const{strings:e}=z(),r=H(),i=v(),t=q();return(S,f)=>(d(),F("div",Y,[s(i).shouldShowSampleReports?x("",!0):(d(),b(s(X),{key:0})),s(i).shouldShowSampleReports?x("",!0):(d(),b(s(V),{key:1,"cta-link":s(B).getPricingUrl("search-statistics","search-statistics-upsell","seo-statistics"),"button-text":s(e).ctaButtonText,"learn-more-link":s(B).getUpsellUrl("search-statistics","seo-statistics",s(t).isPro?"pricing":"liteUpgrade"),"cta-second-button-action":"",onCtaSecondButtonClick:s(i).showSampleReports,"second-button-text":s(e).ctaSecondButtonText,"cta-second-button-new-badge":"","cta-second-button-visible":"","feature-list":[s(e).feature1,s(e).feature2,s(e).feature3,s(e).feature4],"align-top":"","hide-bonus":!s(r).isUnlicensed},{"header-text":o(()=>[y(w(s(e).ctaHeader),1)]),description:o(()=>[a(s(A),{"core-feature":["search-statistics"]}),y(" "+w(s(e).ctaDescription),1)]),_:1},8,["cta-link","button-text","learn-more-link","onCtaSecondButtonClick","second-button-text","feature-list","hide-bonus"]))]))}},h="all-in-one-seo-pack",tt={setup(){return{searchStatisticsStore:v()}},components:{CoreCard:M,Graph:U,GridColumn:E,GridRow:G,PostsTable:O,SeoStatisticsOverview:N},data(){return{initialTableFilter:"",strings:{seoStatisticsCard:l("SEO Statistics",h),seoStatisticsTooltip:l("The following SEO Statistics graphs are useful metrics for understanding the visibility of your website or pages in search results and can help you identify trends or changes over time.<br /><br />Note: This data is capped at the top 100 keywords per day to speed up processing and to help you prioritize your SEO efforts, so while the data may seem inconsistent with Google Search Console, this is intentional.",h),contentCard:l("Content Performance",h),postsTooltip:l("These lists can be useful for understanding the performance of specific pages or posts and identifying opportunities for improvement. For example, the top winning content may be good candidates for further optimization or promotion, while the top losing may need to be reevaluated and potentially updated.",h)},defaultPages:{rows:[],totals:{page:0,pages:0,total:0}}}},computed:{series(){var c,e,r,i;return!((e=(c=this.searchStatisticsStore.data)==null?void 0:c.seoStatistics)!=null&&e.statistics)||!((i=(r=this.searchStatisticsStore.data)==null?void 0:r.seoStatistics)!=null&&i.intervals)?[]:[{name:l("Search Impressions",h),data:this.searchStatisticsStore.data.seoStatistics.intervals.map(t=>({x:t.date,y:t.impressions})),legend:{total:this.searchStatisticsStore.data.seoStatistics.statistics.impressions}},{name:l("Search Clicks",h),data:this.searchStatisticsStore.data.seoStatistics.intervals.map(t=>({x:t.date,y:t.clicks})),legend:{total:this.searchStatisticsStore.data.seoStatistics.statistics.clicks}}]}},beforeMount(){var e,r,i;const c=new URLSearchParams(((e=window.location)==null?void 0:e.search)||"")||{};if(c.has("table-filter")||(i=(r=this.$route)==null?void 0:r.query)!=null&&i.tab){switch(c.get("table-filter")||this.$route.query.tab){case"TopLosingPages":this.initialTableFilter="topLosing";break;case"TopWinningPages":this.initialTableFilter="topWinning";break;default:this.initialTableFilter="all"}this.$route.query["table-filter"]=void 0,W("table-filter")}},mounted(){this.searchStatisticsStore.isConnected&&this.searchStatisticsStore.loadInitialData()}},st={class:"aioseo-search-statistics-site-statistics"},et=["innerHTML"];function it(c,e,r,i,t,S){const f=n("seo-statistics-overview"),C=n("graph"),g=n("core-card"),k=n("posts-table"),T=n("grid-column"),P=n("grid-row");return d(),F("div",st,[a(P,null,{default:o(()=>[a(T,null,{default:o(()=>[a(g,{class:"aioseo-seo-statistics-card",slug:"seoPerformance","header-text":t.strings.seoStatisticsCard,toggles:!1,"no-slide":""},{tooltip:o(()=>[L("span",{innerHTML:t.strings.seoStatisticsTooltip},null,8,et)]),default:o(()=>{var u,p;return[a(f,{statistics:["impressions","clicks","ctr","position"],"show-graph":!1,view:"side-by-side"}),a(C,{"multi-axis":"",series:S.series,loading:i.searchStatisticsStore.loading.seoStatistics,"legend-style":"simple",timelineMarkers:(p=(u=i.searchStatisticsStore.data)==null?void 0:u.seoStatistics)==null?void 0:p.timelineMarkers},null,8,["series","loading","timelineMarkers"])]}),_:1},8,["header-text"]),a(g,{slug:"posts","header-text":t.strings.contentCard,toggles:!1,"no-slide":""},{tooltip:o(()=>[y(w(t.strings.postsTooltip),1)]),default:o(()=>{var u,p,_;return[a(k,{posts:((_=(p=(u=i.searchStatisticsStore.data)==null?void 0:u.seoStatistics)==null?void 0:p.pages)==null?void 0:_.paginated)||t.defaultPages,columns:["postTitle","indexStatus","seoScore","clicksSortable","impressionsSortable","positionSortable"],"append-columns":{all:"diffPosition",topLosing:"diffDecay",topWinning:"diffDecay"},isLoading:i.searchStatisticsStore.loading.seoStatistics,initialFilter:t.initialTableFilter,"show-items-per-page":"","show-table-footer":""},null,8,["posts","isLoading","initialFilter"])]}),_:1},8,["header-text"])]),_:1})]),_:1})])}const ot=D(tt,[["render",it]]),at={class:"aioseo-search-statistics-seo-statistics"},Zt={__name:"SeoStatistics",setup(c){const e=v(),{shouldShowLite:r,shouldShowMain:i,shouldShowUpgrade:t}=$();return(S,f)=>(d(),F("div",at,[s(i)("search-statistics","seo-statistics")||s(e).shouldShowSampleReports?(d(),b(s(ot),{key:0})):x("",!0),(s(t)("search-statistics","seo-statistics")||s(r))&&!s(e).shouldShowSampleReports?(d(),b(s(Z),{key:1})):x("",!0)]))}};export{Zt as default};
