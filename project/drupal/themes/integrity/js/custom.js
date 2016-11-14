(function($) {
    $(document).ready(function() {
        var activetab;

        $("#sidebar-first").find('[link="' + window.location.pathname + '"]').addClass('active');
        Forms();
        tabclicks();
        deleteclick()



        /*
         * Handle tab clicks
         */
        function tabclicks() {
            $(".title-link,.button-link").on('click', function() {

                $(".title-link").removeClass('active');
                $(this).addClass('active');
                link = $(this).attr("link");
                activetab = link;
                $(".main-content .section").load(link + " .main-content .section", function() {
                    Forms();
                    deleteclick()
                });

            });

        }

        /*
         *  Handle the delete button
         */
        function deleteclick() {
            $("#edit-delete").on('click', function(e) {

                e.preventDefault();
                link = $(this).attr("href");
                $(".main-content .section").load(link + " .main-content .section", function() {
                    Forms();
                });
            });
        }
        /*
         * Handle data retention on unsaved forms and submit forms via ajax
         */
        function Forms() {
            //Load all forms via Ajax
            $('#node-note-edit-form').ajaxForm({
                success: PostSubmit
            });
            $('#node-note-form').ajaxForm({
                success: NewformPostSubmit
            });
            $('#node-note-delete-form').ajaxForm({
                success: DeleteSubmit
            });
            $(".node-note-form").sisyphus();

            function PostSubmit(responseText, statusText, xhr, $form) {
                title = $("#edit-title-0-value").val();
                $(".active .title").text(title);
                doNotify(title, "Has been saved");
            }

            function NewformPostSubmit(responseText, statusText, xhr, $form) {
                var pattern = "no-js?destination=/node/";
                var nid = responseText.substring(responseText.indexOf(pattern) + pattern.length, responseText.indexOf("/edit"));
                $(".view-content").prepend(
                    '<div class="title-link active" link="/node/' + nid + '/edit">' +
                    '<span class="title">' + $("#edit-title-0-value").val() + '</span> ' +
                    '<div class="date"> ' + GetDate() + '</div>' +
                    ' </div>')
                doNotify($("#edit-title-0-value").val(), "Has been created");
                tabclicks()

            }

            function DeleteSubmit(responseText, statusText, xhr, $form) {
                var pattern = "node/";
                var nid = $form[0].action.substring($form[0].action.indexOf(pattern) + pattern.length, $form[0].action.indexOf("/delete"));
                $('[link="/node/' + nid + '/edit"').remove();
                $(".title-link").first().click();
            }

        }
    });

    /*
     * Example of calling Electron functionality from within drupal
     */
    function doNotify(form_title, form_body) {
        var options = [{
            title: form_title,
            body: form_body
        }]
        new Notification(options[0].title, options[0]);
    }

    /*
     * Function to return current date
     */
    function GetDate() {
        var d = new Date();
        var curr_date = d.getDate();
        var curr_month = d.getMonth() + 1; //Months are zero based
        var curr_year = d.getFullYear();
        return curr_year + "-" + curr_month + "-" + curr_date;
    }


})(jQuery);