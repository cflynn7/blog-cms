$(document).ready(function() {
    $("#hidden").hover(function() {
        $(this).css("color", "black");
    },
    function() {
        $(this).hide();

    });

     $("button").click(function() {
        alert("Hi there!");
    })
});


/* var options = {
  valueNames: [ 'title' ]
 };
new List('sortable-blog-list', options);


$.get( "index.php")
    .done(function( data ) {
        alert( "Data Loaded: " + data );
    });

    $.post( "submit-post.php", {
        title: "AJAX post",
        content: "AJAX Post Content",
        author: "me",
        date: "2018-10-5"
    }).done(function( data ) {
        alert( "Data Loaded: " + data);
    });

    var editor = ace.edit("editor");
    editor.session.setMode("ace/mode/html");

    
$("#submit").click(function() {
    var title = $("#title").val();
var author = $("#author").val();
var date = $("#date").val();
var content = editor.getValue();


});

$.post( "submit-post.php", { 
    title: title, 
    content: content, 
    author: author, 
    date: date 
}).done(function() {
window.location = "/index.php";
});
*/

