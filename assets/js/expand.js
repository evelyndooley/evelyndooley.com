$(document).ready(function(){
    //collapse on load, needed for grid to work
    $(".resume-grid").slideToggle(0);
    
    $("#expand").on('click', function(event) {

        $expand = $(this);
        //getting the element
        $content = $(".resume-grid");
        //open up the content needed - toggle the slide- if visible, slide up, if not slidedown.
        $content.slideToggle(500, function () {
            //execute this after slideToggle is done
            //change text of expand based on visibility of content div
            $expand.text(function () {
                //change text based on condition
                return $content.is(":visible") ? "Collapse" : "Expand";
            });
        });
    });

    $("#resume-button").on('click', function(event) {

        $expand = $("#expand");
        //getting the element
        $content = $(".resume-grid");
        //open up the content needed - toggle the slide- if visible, slide up, if not slidedown.
        $content.slideToggle(500, function () {
            //execute this after slideToggle is done
            //change text of expand based on visibility of content div
            $expand.text(function () {
                //change text based on condition
                return $content.is(":visible") ? "Collapse" : "Expand";
            });
        });
    });
});