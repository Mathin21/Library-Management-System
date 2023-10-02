function openAddBookPage() {
    window.location.href = "add_book.html";
}
function openDeleteBookPage(){
    window.location.href = "delete_book.html";
}
function openViewBookPage(){
    window.location.href = "view_book.php";
}
function openIssueBookPage(){
    window.location.href = "issue_book.html";
}
function openReturnBookPage(){
    window.location.href = "return_book.html";
}
var quitButton = document.getElementById('quit');
quitButton.addEventListener('click', function() {
    window.location.href = "index.html";
});
