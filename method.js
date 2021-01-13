var xmlhttp = false;
try {
xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
} catch (e) {
try {
xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
} catch (E) {
//Else we must be using a non-IE browser.
xmlhttp = false;
}
}
//If we are using a non-IE browser, create a JavaScript instance of the object.
if (!xmlhttp && typeof XMLHttpRequest != 'undefined') {
xmlhttp = new XMLHttpRequest();
}
function closetask (){
theObject = document.getElementById("createtask");
theObject.style.visibility = "hidden";
theObject.style.height = "0px";
theObject.style.width = "0px";
acObject = document.getElementById("autocompletediv");
acObject.style.visibility = "hidden";
acObject.style.height = "0px";
acObject.style.width = "0px";
}

function closetaskenabledisable (){
theObject = document.getElementById("image");
theObject.style.visibility = "hidden";
theObject.style.height = "0px";
theObject.style.width = "0px";
}//A variable used to distinguish whether to open or close the calendar.
var showCalendar = true;
function showHideCalendar() {
//The location we are loading the page into.
var objID = "calendar";
//Change the current image of the minus or plus.
if (showCalendar == true){
//Show the calendar.
document.getElementById("opencloseimg").src = "images/mins.jpeg";
//The page we are loading.
var serverPage = "calendar.php";
//Set the open close tracker variable.
showCalendar = false;
var obj = document.getElementById(objID);
xmlhttp.open("GET", serverPage);
xmlhttp.onreadystatechange = function() {
if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
obj.innerHTML = xmlhttp.responseText;
}
}
xmlhttp.send(null);
} else {
//Hide the calendar.
document.getElementById("opencloseimg").src = "images/plus.jpeg";
showCalendar = true;
document.getElementById(objID).innerHTML = "";
closetask();
}
}
function createform (e){
theObject = document.getElementById("createtask");
theObject.style.visibility = "visible";
theObject.style.height = "200px";
theObject.style.width = "200px";
var posx = 0;
var posy = 0;
posx = e.clientX + document.body.scrollLeft;
posy = e.clientY + document.body.scrollTop;
theObject.style.left = posx + "px";
theObject.style.top = posy + "px";
//The location we are loading the page into.
var objID = "createtask";
var serverPage = "theform.php";
var obj = document.getElementById(objID);
xmlhttp.open("GET", serverPage);
xmlhttp.onreadystatechange = function() {
if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
obj.innerHTML = xmlhttp.responseText;
}
}
xmlhttp.send(null);
}
function findPosX(obj){
var curleft = 0;
if (obj.offsetParent){
while (obj.offsetParent){
curleft += obj.offsetLeft
obj = obj.offsetParent;
}
} else if (obj.x){
curleft += obj.x;
}
return curleft;
}
function findPosY(obj){
var curtop = 0;
if (obj.offsetParent){
while (obj.offsetParent){
curtop += obj.offsetTop
obj = obj.offsetParent;
}
} else if (obj.y){
curtop += obj.y;
}
return curtop;
}
function autocompleted (thevalue, e){
theObject = document.getElementById("autocompletediv");
theObject.style.visibility = "visible";
theObject.style.width = "152px";
var posx = 0;
var posy = 0;
posx = (findPosX (document.getElementById("yourname")) + 1);
posy = (findPosY (document.getElementById("yourname")) + 23);
theObject.style.left = posx + "px";
theObject.style.top = posy + "px";
var theextrachar = e.which;
if (theextrachar == undefined){
theextrachar = e.keyCode;
}
//The location we are loading the page into.
var objID = "autocompletediv";
//Take into account the backspace.
if (theextrachar == 8){
if (thevalue.length == 1){
var serverPage = "autocomp.php";
} else {
var serverPage = "autocomp.php" + "?sstring=" + 
thevalue.substr (0, (thevalue.length -1));
}
} else {
var serverPage = "autocomp.php" + "?sstring=" + 
thevalue + String.fromCharCode (theextrachar);
}
var obj = document.getElementById(objID);
xmlhttp.open("GET", serverPage);
xmlhttp.onreadystatechange = function() {
if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
obj.innerHTML = xmlhttp.responseText;
}
}
xmlhttp.send(null);
}
function setvalue (thevalue){
acObject = document.getElementById("autocompletediv");
acObject.style.visibility = "hidden";
acObject.style.height = "0px";
acObject.style.width = "0px";
document.getElementById("yourname").value = thevalue;
}
function validateform (thevalue){
serverPage = "validator.php?sstring=" + thevalue +"x";
objID = "messagebox";
var obj = document.getElementById(objID);
xmlhttp.open("GET", serverPage);
xmlhttp.onreadystatechange = function() {
if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
obj.innerHTML = xmlhttp.responseText;
}
}
xmlhttp.send(null);
}
function validateforma (thevalue){
serverPage = "validatora.php?sstring=" + thevalue + "x";
objID = "messageboxa";
var obj = document.getElementById(objID);
xmlhttp.open("GET", serverPage);
xmlhttp.onreadystatechange = function() {
if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
obj.innerHTML = xmlhttp.responseText;
}
}
xmlhttp.send(null);
}
function validateformb (thevalue){
serverPage = "validatorb.php?sstring=" + thevalue + "1";
objID = "messageboxb";
var obj = document.getElementById(objID);
xmlhttp.open("GET", serverPage);
xmlhttp.onreadystatechange = function() {
if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
obj.innerHTML = xmlhttp.responseText;
}
}
xmlhttp.send(null);
}
function validateformc (thevalue){
serverPage = "validatorc.php?sstring=" + thevalue + "1";
objID = "messageboxc";
var obj = document.getElementById(objID);
xmlhttp.open("GET", serverPage);
xmlhttp.onreadystatechange = function() {
if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
obj.innerHTML = xmlhttp.responseText;
}
}
xmlhttp.send(null);
}
function validateformd (thevalue){
serverPage = "validatord.php?sstring=" + thevalue + "1";
objID = "messageboxd";
var obj = document.getElementById(objID);
xmlhttp.open("GET", serverPage);
xmlhttp.onreadystatechange = function() {
if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
obj.innerHTML = xmlhttp.responseText;
}
}
xmlhttp.send(null);
}
function validateforme (thevalue,theval){
serverPage = "validatore.php?sstring=" + thevalue + "&sstrings=" + theval + "&sstringg=" + theval + "x";
objID = "messageboxe";
var obj = document.getElementById(objID);
xmlhttp.open("GET", serverPage);
xmlhttp.onreadystatechange = function() {
if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
obj.innerHTML = xmlhttp.responseText;
}
}
xmlhttp.send(null);
}
function validateformf (thevalue){
serverPage = "validatorf.php?sstring=" + thevalue + "x";
objID = "messageboxf";
var obj = document.getElementById(objID);
xmlhttp.open("GET", serverPage);
xmlhttp.onreadystatechange = function() {
if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
obj.innerHTML = xmlhttp.responseText;
}
}
xmlhttp.send(null);
}
function validateformg (thevalue,theval,thevalu){
serverPage = "validatorg.php?sstring=" + thevalue + "&sstrings=" + theval + "&sstringg=" + thevalu;
objID = "messageboxg";
var obj = document.getElementById(objID);
xmlhttp.open("GET", serverPage);
xmlhttp.onreadystatechange = function() {
if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
obj.innerHTML = xmlhttp.responseText;
}
}
xmlhttp.send(null);
}
//function to load a new messagebox
var xmlhttp = false;
try
{
xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
}
catch(a)
{
try
{
xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
}
catch(b)
{
xmlhttp=false;
}
}
if(!xmlhttp && typeof XMLHttpRequest != 'undefined')
{
xmlhttp=new XMLHttpRequest();
}
function messageboxload(thevalue,useremailid,userpassword)
{
var objid="messageboxload" + thevalue;
var serverpage="messageboxload.php?display_no=" + thevalue+ "&useremailid=" + useremailid + "&userpassword=" + userpassword;
var obj=document.getElementById(objid);
xmlhttp.open("GET",serverpage);
xmlhttp.onreadystatechange=function()
{
if(xmlhttp.readyState==4 && xmlhttp.status==200)
{
obj.innerHTML = xmlhttp.responseText;
}
}
xmlhttp.send(null);
}
function messageboxloadcancel(thevalue)
{
var objid="messageboxload" + thevalue;
var serverpage="messageboxloadcancel.php";
var obj=document.getElementById(objid);
xmlhttp.open("GET",serverpage);
xmlhttp.onreadystatechange=function()
{
if(xmlhttp.readyState==4 && xmlhttp.status==200)
{
obj.innerHTML = xmlhttp.responseText;
}
}
xmlhttp.send(null);
}
function messageboxsend(thevalue,message)
{
var objid="messageboxload" + thevalue;
var serverpage="messageboxsend.php?display_no=" + thevalue + "&message=" + message ;
var obj=document.getElementById(objid);
xmlhttp.open("GET",serverpage);
xmlhttp.onreadystatechange=function()
{
if(xmlhttp.readyState==4 && xmlhttp.status==200)
{
obj.innerHTML = xmlhttp.responseText;
}
}
xmlhttp.send(null);
}
function sessionassign(usercity)
{
var objid="imageset";
var serverpage="upload_image_set.php?user_city=" + usercity;
var obj=document.getElementById(objid);
xmlhttp.open("GET",serverpage);
xmlhttp.onreadystatechange=function()
{
if(xmlhttp.readyState==4 && xmlhttp.status==200)
{
obj.innerHTML = xmlhttp.responseText;
}
}
xmlhttp.send(null);
}
function enablebuttonloader(thevalue)
{
var objid="image"+ thevalue;
var serverpage="enablebutton.php?counter=" + thevalue;
var obj=document.getElementById(objid);
xmlhttp.open("GET",serverpage);
xmlhttp.onreadystatechange=function()
{
if(xmlhttp.readyState==4 && xmlhttp.status==200)
{
obj.innerHTML = xmlhttp.responseText;
}
}
xmlhttp.send(null);
}
function disablebuttonloader(thevalue)
{
var objid="image"+ thevalue;
var serverpage="disablebutton.php?counter=" + thevalue;
var obj=document.getElementById(objid);
xmlhttp.open("GET",serverpage);
xmlhttp.onreadystatechange=function()
{
if(xmlhttp.readyState==4 && xmlhttp.status==200)
{
obj.innerHTML = xmlhttp.responseText;
}
}
xmlhttp.send(null);
}

function hidebutton(thevalue)
{
var objid="image" + thevalue;
var serverpage="messageboxloadcancel.php";
var obj=document.getElementById(objid);
xmlhttp.open("GET",serverpage);
xmlhttp.onreadystatechange=function()
{
if(xmlhttp.readyState==4 && xmlhttp.status==200)
{
obj.innerHTML = xmlhttp.responseText;
}
}
xmlhttp.send(null);
}
function aboutinfoloader(thevalue,mobileno,emailid,state,gender,adress)//thevalue,emailid,mobileno,state,gender
{
var objid="messageboxload" + thevalue;
var serverpage="aboutinfoloader.php?gender=" + gender + "&adress=" + adress + "&mobileno=" + mobileno + "&state=" + state + "&emailid=" + emailid + "&counter=" + thevalue;//?counter=" + thevalue + "&emailid=" + emailid + "&mobileno=" + mobileno + "&state=" + state + "&gender=" + gender;
var obj=document.getElementById(objid);
xmlhttp.open("GET",serverpage);
xmlhttp.onreadystatechange=function()
{
if(xmlhttp.readyState==4 && xmlhttp.status==200)
{
obj.innerHTML = xmlhttp.responseText;
}
}
xmlhttp.send(null);
}
function loadusermessages(emailid)
{
var objid="loadmessages";
var serverpage="loadusermessages.php?emailid=" + emailid ;//?counter=" + thevalue + "&emailid=" + emailid + "&mobileno=" + mobileno + "&state=" + state + "&gender=" + gender;
var obj=document.getElementById(objid);
xmlhttp.open("GET",serverpage);
xmlhttp.onreadystatechange=function()
{
if(xmlhttp.readyState==4 && xmlhttp.status==200)
{
obj.innerHTML = xmlhttp.responseText;
}
}
xmlhttp.send(null);
}
function messageshide()
{
var objid="loadmessages";
var serverpage="loadmessages.php";
var obj=document.getElementById(objid);
xmlhttp.open("GET",serverpage);
xmlhttp.onreadystatechange=function()
{
if(xmlhttp.readyState==4 && xmlhttp.status==200)
{
obj.innerHTML = xmlhttp.responseText;
}
}
xmlhttp.send(null);
}
function loaddeletemessages(emailid)
{
var objid="loadmessages";
var serverpage="delete_messages.php?emailid=" + emailid;
var obj=document.getElementById(objid);
xmlhttp.open("GET",serverpage);
xmlhttp.onreadystatechange=function()
{
if(xmlhttp.readyState==4 && xmlhttp.status==200)
{
obj.innerHTML = xmlhttp.responseText;
}
}
xmlhttp.send(null);
}