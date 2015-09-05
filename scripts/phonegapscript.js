// JavaScript Document
function onBodyLoad() {
document.addEventListener("deviceready",onDeviceReady,
false);
}
function onDeviceReady() {
navigator.notification.alert("PhoneGap is ready!");
}