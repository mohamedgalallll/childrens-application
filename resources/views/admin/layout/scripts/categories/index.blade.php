<script>
    $(document).ready(function () {
        $('#mainCategoryToSelect').change(function () {
            var category_id = $(this).val();
            if (category_id) {
                $.ajax({
                    type: "GET",
                    url: "{{url('admin/getSubCategories')}}?main_category_id=" + category_id,
                    success: function (res) {
                        if (res) {
                            $("#sup_category_id").empty();
                            $("#sup_sup_category_id").empty();
                            $("#sup_category_id").parent().parent().fadeIn();
                            $("#sup_category_id").append('<option value="" >Select Sup Category</option>');
                            $.each(res, function (key, value) {
                                $("#sup_category_id").append('<option value="' + key + '">' + value + '</option>');
                            });

                        } else {
                            $("#sup_category_id").empty();
                            $("#sup_sup_category_id").empty();
                        }
                    }
                });
            } else {
                $("#sup_category_id").empty();
                $("#sup_sup_category_id").empty();
            }
        });


        $('#sup_category_id').change(function () {

            var sup_category_id = $(this).val();
            if (sup_category_id) {
                $.ajax({
                    type: "GET",
                    url: "{{url('admin/getSubSubCategories')}}?sup_category_id=" + sup_category_id,
                    success: function (res) {
                        if (res) {
                            $("#sup_sup_category_id").empty();
                            $("#sup_sup_category_id").parent().parent().fadeIn();
                            $("#sup_sup_category_id").append('<option value="">Select Sup Of Sup Category</option>');
                            $.each(res, function (key, value) {
                                $("#sup_sup_category_id").append('<option value="' + key + '">' + value + '</option>');
                            });

                        } else {
                            $("#sup_sup_category_id").empty();
                        }
                    }
                });
            } else {
                $("#sup_sup_category_id").empty();
            }
        });
    });


    $('#library_main_category_id').change(function () {
        var category_id = $(this).val();
        if (category_id) {
            $.ajax({
                type: "GET",
                url: "{{url('admin/getLibrariesSubCategories')}}?library_main_cat_id=" + category_id,
                success: function (res) {
                    if (res) {
                        $("#library_sub_category_id").empty();
                        $("#library_sub_category_id").parent().parent().fadeIn();
                        $("#library_sub_category_id").append('<option value="" >Select Sup Category</option>');
                        $.each(res, function (key, value) {
                            $("#library_sub_category_id").append('<option value="' + key + '">' + value + '</option>');
                        });

                    } else {
                        $("#library_sub_category_id").empty();
                    }
                }
            });
        } else {
            $("#sup_category_id").empty();
            $("#sup_sup_category_id").empty();
        }
    });
</script>
