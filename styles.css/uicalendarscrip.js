// JavaScript Document
$('#datepicker').datepicker();
var date = $('#datepicker').datepicker('getDate');
var dateTypeVar = $('#datepicker').datepicker('getDate');
$.datepicker.formatDate('dd-mm-yy', dateTypeVar);
$(function() {
               $("#datepicker").datepicker({ dateFormat: "yy-mm-dd" }).val()
       });
	   
	    $(function() {
               $("#startdate").datepicker({ dateFormat: "dd-mm-yy" }).val()
               $("#enddate").datepicker({ dateFormat: "dd-mm-yy" }).val()
       });