import{g as m}from"./params.bea1a08d.js";let o=!1,n=null,d;const a=i=>{d(i,n,a)},W=(i,s,e,l,r,u,t,_,c)=>{let f=50,w=50;if(r){const g=window.outerHeight;f=(window.innerWidth-e)/2,w=(g-50-l)/2}let p=`location=0,status=0,width=${e},height=${l},left=${f},top=${w}`;(s==="_blank"||s==="_self")&&(p=""),(!n||n.closed)&&(n=window.open(i,s,p)),n&&n.focus(),o=window.setInterval(()=>v(u,t,_,c),500),c&&(d=c,window.addEventListener("message",a,!1))},v=(i,s,e,l=!1)=>{if(l){if(!n){window.removeEventListener("message",a,!1),window.clearInterval(o),e();return}n.closed&&(n=null,window.removeEventListener("message",a,!1),window.clearInterval(o),e());return}let r={};try{r=m(n.location.search)}catch{}const u=[];if(i.forEach(t=>{if(r[t]!==void 0&&r[t]){u.push(!0);return}u.push(!1)}),u.every(t=>t))return window.clearInterval(o),s(r).then(()=>{n.close(),n=null,e(!0)});if(!n){window.clearInterval(o),e();return}n.closed&&(n=null,window.clearInterval(o),e())};export{W as p};