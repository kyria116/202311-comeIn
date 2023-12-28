$((function(){var t=[31,28,31,30,31,30,31,31,30,31,30,31];function i(t={}){let i=Object.assign({lineWidth:.5,lineNum:2,dotR:0,dotNum:0,preGroundColor:[0,0],backGroundColor:[255,255],fontSize:30,fontFamily:["Arial"],fontStyle:"fill",content:"012345789",length:4},t);Object.keys(i).forEach((t=>{this[t]=i[t]})),this.canvas=null,this.paint=null}$(document).ready((function(){$(".selectBox select").on("change",(function(){$(this).css("color","#221e1f")}));for(var i='<option value="day">日</option>',n=1;n<=t[0];n++)i+='<option value="'+n+'">'+n+"</option>";$("#day").append(i),$("#day").val("day");for(i='<option value="month">月</option>',n=1;n<=12;n++)i+='<option value="'+n+'">'+n+"</option>";$("#month").append(i),$("#month").val("month");var e=new Date;i='<option value="year">年</option>';selectedYear="year";for(n=1930;n<=e.getFullYear();n++)i+='<option value="'+n+'">'+n+"</option>";$("#year").append(i),$("#year").val(selectedYear)})),i.prototype.getRandom=function(...t){return t.sort(((t,i)=>t-i)),Math.floor(Math.random()*(t[1]-t[0])+t[0])},i.prototype.getColor=function(t){let i=new Array(3).fill("");return i=i.map((i=>this.getRandom(...t))),i},i.prototype.getText=function(){let t=this.content.length,i="";for(let n=0;n<this.length;n++)i+=this.content[this.getRandom(0,t)];return i},i.prototype.line=function(){for(let t=0;t<this.lineNum;t++){let t=this.getRandom(0,this.canvas.width),i=this.getRandom(0,this.canvas.height),n=this.getRandom(0,this.canvas.width),e=this.getRandom(0,this.canvas.height);this.paint.beginPath(),this.paint.lineWidth=this.lineWidth;let o=this.getColor(this.preGroundColor);this.paint.strokeStyle="rgba("+o[0]+","+o[1]+","+o[2]+",0.8)",this.paint.moveTo(t,i),this.paint.lineTo(n,e),this.paint.closePath(),this.paint.stroke()}},i.prototype.circle=function(){for(let t=0;t<this.dotNum;t++){let t=this.getRandom(0,this.canvas.width),i=this.getRandom(0,this.canvas.height);this.paint.beginPath(),this.paint.arc(t,i,this.dotR,0,2*Math.PI,!1),this.paint.closePath();let n=this.getColor(this.preGroundColor);this.paint.fillStyle="rgba("+n[0]+","+n[1]+","+n[2]+",0.8)",this.paint.fill()}},i.prototype.font=function(){let t=this.getText();this.callback(t),this.paint.font=this.fontSize+"px "+this.fontFamily[this.getRandom(0,this.fontFamily.length)],this.paint.textBaseline="middle";let i=this.fontStyle+"Text",n=this.fontStyle+"Style";for(let e=0;e<this.length;e++){let o=this.paint.measureText(t[e]).width,a=this.getRandom(this.canvas.width/this.length*e+.2*o,this.canvas.width/this.length*e+.5*o),h=this.getRandom(-6,6),s=this.getColor(this.preGroundColor);this.paint[n]="rgba("+s[0]+","+s[1]+","+s[2]+",0.8)",this.paint.save(),this.paint.rotate(h*Math.PI/180),this.paint[i](t[e],a,this.canvas.height/2),this.paint.restore()}},i.prototype.draw=function(t,i=function(){}){if(!this.paint){if(this.canvas=t,!this.canvas)return;this.paint=this.canvas.getContext("2d"),this.callback=i,this.canvas.onclick=()=>{this.drawAgain()}}let n=this.getColor(this.backGroundColor);this.paint.fillStyle="rgba("+n[0]+","+n[1]+","+n[2]+",0.8)",this.paint.fillRect(0,0,this.canvas.width,this.canvas.height),this.circle(),this.line(),this.font()},i.prototype.clear=function(){this.paint.clearRect(0,0,this.canvas.width,this.canvas.height)},i.prototype.drawAgain=function(){this.clear(),this.draw(this.callbak)},"undefined"!=typeof module&&!module.nodeType&&module.exports&&(module.exports=i),(new i).draw(document.querySelector("#captcha"),(t=>{console.log(t)})),$(".refreshBtn").on("click",(function(){$("#captcha").click()}))}));