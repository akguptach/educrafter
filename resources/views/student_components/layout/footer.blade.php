<div class="footer">
    <div class="copyright">
        <p></p>
    </div>
</div>
<!--**********************************
        Scripts
    ***********************************-->
<!-- Required vendors -->

<script src="<?php echo asset('/student/');?>/vendor/global/global.min.js"></script>
<script src="<?php echo asset('/student/');?>/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>

<!-- Datatable -->
<script src="<?php echo asset('/student/');?>/vendor/datatables/js/jquery.dataTables.min.js"></script>
<script src="<?php echo asset('/student/');?>/js/plugins-init/datatables.init.js"></script>

<!-- Svganimation scripts -->
<script src="<?php echo asset('/student/');?>/vendor/svganimation/vivus.min.js"></script>
<script src="<?php echo asset('/student/');?>/vendor/svganimation/svg.animation.js"></script>

<script src="<?php echo asset('/student/');?>/js/custom.min.js"></script>
<script src="<?php echo asset('/student/');?>/js/dlabnav-init.js"></script>
<link class="main-css" rel="stylesheet" href="<?php echo asset('/student/');?>/css/style.css">



<script src="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.4/croppie.js"></script>
<script>
$("div.star-wrapper i").on("mouseover", function() {
    if ($(this).siblings("i.vote-recorded").length == 0) {
        $(this)
            .prevAll()
            .addBack()
            .addClass("fa-solid yellow")
            .removeClass("fa-regular");
        $(this).nextAll().removeClass("fa-solid yellow").addClass("fa-regular");
    }
});

$("div.star-wrapper i").on("click", function() {
    let rating = $(this).prevAll().length + 1;
    let movie_id = $(this).closest("div.rating-wrapper").data("id");

    if ($(this).siblings("i.vote-recorded").length == 0) {

        $(this).prevAll().addBack().addClass("vote-recorded");
        /*$.post("update_ratings.php", { movie: movie_id, rating: rating }).done(
          function (data) {
        	parent_div.find("p.v-data").text(data);
          }
        );*/

    }
});

$(document).ready(function() {
    var table = $('#statements').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ route('order.statements') }}",
        columns: [

            {
                data: 'DT_RowIndex',
                name:'DT_RowIndex'
            },

            {
                data: 'date',
                name:'date'
            },
            {
                data: 'description',
                name:'description'
            },
            {
                data: 'type',
                name:'type'
            },
            {
                data: 'amount',
                name:'amount'
            },
        ] 
    });
});
</script>