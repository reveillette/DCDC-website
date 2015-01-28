        // Likes
        $(document).on('click', '.likes', function(event) {
            event.preventDefault();
            $(this).toggleClass("likes").toggleClass("isliked");
            var i = $(this).text();
            i++;
            $(this).text(i);
        });

        $(document).on('click', '.isliked', function(event) {
            event.preventDefault();
            $(this).toggleClass("isliked").toggleClass("likes");
            var j = $(this).text();
            j++;
            $(this).text(j);
        });