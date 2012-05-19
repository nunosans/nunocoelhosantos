$(document).ready(function() {

	speedIn = 600;
	speedOut = 750;

	$("#header").bind("mouseenter", function(event) {
	    event.preventDefault();
	    $("#aboutBox").fadeIn(speedIn);
	});
	
	$("#about").bind("mouseleave", function(event) {
	    event.preventDefault();
	    $("#aboutBox").fadeOut(speedOut);
	});
	
	$("#selectedAlbum").bind("mouseenter", function(event) {
	    event.preventDefault();
	    $("#albumsBox").fadeIn(speedIn);
	});
	
	$("#albums").bind("mouseleave", function(event) {
	    event.preventDefault();
	    $("#albumsBox").fadeOut(speedOut);
	});
	
	$("#contactsLink").bind("mouseenter", function(event) {
	    event.preventDefault();
	    $("#contactsBox").fadeIn(speedIn);
	});
	
	$("#contacts").bind("mouseleave", function(event) {
	    event.preventDefault();
	    $("#contactsBox").fadeOut(speedOut);
	});
	
	
	
	$("#ontheedgeButton").bind("mouseenter", function(event) {
	    event.preventDefault();
	    $("#ontheedgeResume").fadeIn(250);
	});
	
	$("#ontheedgeButton").bind("mouseleave", function(event) {
	    event.preventDefault();
	    $("#ontheedgeResume").fadeOut(250);
	});
	
	$("#bangkokprotestButton").bind("mouseenter", function(event) {
	    event.preventDefault();
	    $("#bangkokprotestResume").fadeIn(250);
	});
	
	$("#bangkokprotestButton").bind("mouseleave", function(event) {
	    event.preventDefault();
	    $("#bangkokprotestResume").fadeOut(250);
	});
	
	$("#eastwestButton").bind("mouseenter", function(event) {
	    event.preventDefault();
	    $("#eastwestResume").fadeIn(250);
	});
	
	$("#eastwestButton").bind("mouseleave", function(event) {
	    event.preventDefault();
	    $("#eastwestResume").fadeOut(250);
	});
	
	$("#brumaButton").bind("mouseenter", function(event) {
	    event.preventDefault();
	    $("#brumaResume").fadeIn(250);
	});
	
	$("#brumaButton").bind("mouseleave", function(event) {
	    event.preventDefault();
	    $("#brumaResume").fadeOut(250);
	});
	
	$("#maehongsornButton").bind("mouseenter", function(event) {
	    event.preventDefault();
	    $("#maehongsornResume").fadeIn(250);
	});
	
	$("#maehongsornButton").bind("mouseleave", function(event) {
	    event.preventDefault();
	    $("#maehongsornResume").fadeOut(250);
	});
	
	$("#peopleButton").bind("mouseenter", function(event) {
	    event.preventDefault();
	    $("#peopleResume").fadeIn(250);
	});
	
	$("#peopleButton").bind("mouseleave", function(event) {
	    event.preventDefault();
	    $("#peopleResume").fadeOut(250);
	});
	
	$("#amuletworldButton").bind("mouseenter", function(event) {
	    event.preventDefault();
	    $("#amuletworldResume").fadeIn(250);
	});
	
	$("#amuletworldButton").bind("mouseleave", function(event) {
	    event.preventDefault();
	    $("#amuletworldResume").fadeOut(250);
	});
	
	$("#burmesepostcardsButton").bind("mouseenter", function(event) {
	    event.preventDefault();
	    $("#burmesepostcardsResume").fadeIn(250);
	});
	
	$("#burmesepostcardsButton").bind("mouseleave", function(event) {
	    event.preventDefault();
	    $("#burmesepostcardsResume").fadeOut(250);
	});

});