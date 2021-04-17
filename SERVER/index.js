function navigateToEdit(id) {
    location = "edit.php?id=" + id;
}

function navigateToDelete(id, name) {
    const answer = confirm("Are you sure you want to delete " + name + "?");
    if(!answer) {
        return;
    }
    $.ajax({
        method: "POST",
        url: "products-controller.php",
        data: `id=${id}&command=deleteProduct`,
        error: err => alert(err.message),
        success: result => {
            alert("Done");
            location = "index.php";
        }
    });
}