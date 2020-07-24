require("./bootstrap");
window.$ = require("jquery");

$(function() {
    $("#contact_form")
        .unbind("submit")
        .submit(function(e) {
            e.preventDefault();
            $.ajax({
                type: "POST",
                url: "/save-contact",
                data: $(this).serialize(),
                success: function(response) {
                    console.log(response);
                    $("#contact_form").trigger("reset");
                    $("#error_span").text("");
                    $("#error_span").removeClass();
                    $("#contact_form").hide(2000);
                    $("#thank-you").show(2000);
                    let loader = document.querySelector(".loader");
                    let check = document.querySelector(".check");

                    loader.classList.add("active");
                    loader.addEventListener("animationend", function() {
                        check.classList.add("active");
                    });
                },
                error: function(response) {
                    let errors = response.responseJSON.errors;
                    for (let error in errors) {
                        console.log(error);
                        $(`#${error}`).addClass("error");
                        if (error == "email") {
                            $("#error_span").addClass("error-span");
                            $("#error_span").text(
                                "Please provide a valid Email"
                            );
                        }
                    }
                }
            });
            return false;
        });
});
