<script>
    function deleteData(id){
                                    $("#deleteForm").attr("action",'/admin/delete-order'+"/"+id)
                                }
</script>

<footer class="main-footer">
    <div class="footer-left">
        ©2024 LiveCafe All rights reserved
    </div>
    <div class="footer-right">

        App Version : 2.1

    </div>
</footer>
</div>
</div>

<div class="modal fade" tabindex="-1" role="dialog" id="deleteModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Item Delete Confirmation</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Are You sure delete this item ?</p>
            </div>
            <div class="modal-footer bg-whitesmoke br">
                <form id="deleteForm" action="" method="POST">
                    <input type="hidden" name="_token" value="2fFbKVzu9lFd74YgiCwx0cxITEVOrHcudkJ8AkRX"
                        autocomplete="off"> <input type="hidden" name="_method" value="DELETE"> <button type="button"
                        class="btn btn-danger" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Yes, Delete</button>
                </form>
            </div>
        </div>
    </div>
</div>




<script src="./bongdorn/admin/backend/js/popper.min.js"></script>
<script src="./bongdorn/admin/backend/js/bootstrap.min.js"></script>
<script src="./bongdorn/admin/backend/js/jquery.dataTables.min.js"></script>
<script src="./bongdorn/admin/backend/js/dataTables.bootstrap4.min.js"></script>
<script src="./bongdorn/admin/backend/js/jquery.nicescroll.min.js"></script>
<script src="./bongdorn/admin/backend/js/moment.min.js"></script>
<script src="./bongdorn/admin/backend/js/stisla.js"></script>
<script src="./bongdorn/admin/backend/js/scripts.js"></script>
<script src="./bongdorn/admin/backend/js/select2.min.js"></script>
<script src="./bongdorn/admin/backend/js/tagify.js"></script>
<script src="./bongdorn/admin/toastr/toastr.min.js"></script>
<script src="./bongdorn/admin/backend/js/bootstrap4-toggle.min.js"></script>
<script src="./bongdorn/admin/backend/js/fontawesome-iconpicker.min.js"></script>
<script src="./bongdorn/admin/backend/js/bootstrap-datepicker.min.js"></script>
<script src="./bongdorn/admin/backend/clockpicker/bootstrap-clockpicker.js">
</script>
<script src="./bongdorn/admin/backend/js/jquery.datetimepicker.js"></script>
<script src="./bongdorn/admin/backend/js/iziToast.min.js"></script>
<script src="./bongdorn/admin/backend/js/modules-toastr.js"></script>
<script src="./bongdorn/admin/backend/js/tinymce.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
</script>
<script>
</script>




<script>
    (function($) {
    "use strict";
    $(document).ready(function () {
        tinymce.init({
            selector: '.summernote',
            plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed linkchecker a11ychecker tinymcespellchecker permanentpen powerpaste advtable advcode editimage tinycomments tableofcontents footnotes mergetags autocorrect typography inlinecss',
            toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | addcomment showcomments | spellcheckdialog a11ycheck typography | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
            tinycomments_mode: 'embedded',
            tinycomments_author: 'Author name',
            mergetags_list: [
                { value: 'First.Name', title: 'First Name' },
                { value: 'Email', title: 'Email' },
            ]
        });
        $('#dataTable').DataTable();
        $('.select2').select2();
        $('.sub_cat_one').select2();
        $('.tags').tagify();
        $('.datetimepicker_mask').datetimepicker({
            format:'Y-m-d H:i',

        });
        $('.custom-icon-picker').iconpicker({
            templates: {
                popover: '<div class="iconpicker-popover popover"><div class="arrow"></div>' +
                    '<div class="popover-title"></div><div class="popover-content"></div></div>',
                footer: '<div class="popover-footer"></div>',
                buttons: '<button class="iconpicker-btn iconpicker-btn-cancel btn btn-default btn-sm">Cancel</button>' +
                    ' <button class="iconpicker-btn iconpicker-btn-accept btn btn-primary btn-sm">Accept</button>',
                search: '<input type="search" class="form-control iconpicker-search" placeholder="Type to filter" />',
                iconpicker: '<div class="iconpicker"><div class="iconpicker-items"></div></div>',
                iconpickerItem: '<a role="button" href="javascript:;" class="iconpicker-item"><i></i></a>'
            }
        })
        $('.datepicker').datepicker({
            format: 'yyyy-mm-dd',
            startDate: '-Infinity'
        });
        $('.clockpicker').clockpicker();

        $("#setLanguage").on('change', function(e){
            this.submit();
        });

    });

    })(jQuery);
</script>
