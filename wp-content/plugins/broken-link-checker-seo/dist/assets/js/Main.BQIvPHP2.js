import{t as n,x as s,o as i}from"./index.B-fNRxMl.js";import a from"./Connect.CA81sYpR.js";import p from"./Success.n0SKKjON.js";import c from"./Welcome.CW4IGvb7.js";import{_ as u}from"./dynamic-import-helper.BYS4eB6Y.js";import{u as m}from"./SetupWizard.Cwr4f2FG.js";import"./Index.CWt2wRE_.js";import"./LicenseUpgrade.Dgq65s4z.js";import"./LicenseStore.Db5X-EXE.js";import"./datetime.Gd0MR9my.js";import"./Close.Dorc6RTZ.js";import"./Button.B_i50r8c.js";import"./Header.DgJrAjtm.js";import"./Logo.Wni62kpo.js";const l={setup(){return{setupWizardStore:m()}},components:{Connect:a,Success:p,Welcome:c},methods:{deleteStage(o){const t=[...this.setupWizardStore.stages],r=t.findIndex(e=>o===e);r!==-1&&t.splice(r,1),this.setupWizardStore.stages=t}},mounted(){this.setupWizardStore.currentStage=this.stage}};function f(o,t,r,e,_,d){return i(),n(s(o.$route.name))}const D=u(l,[["render",f]]);export{D as default};
