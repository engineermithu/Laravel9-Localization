<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Localization</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"/>
</head>
<body>
<div class="container mt-3 text-center">
    <h2>{{ __('text.Multi Language Website Laravel 9') }}</h2>
    <hr>
    <div class="row">
        <div class="col-md-6 offset-3">
            <label for="">{{ __('text.Select Language') }}</label>
            <select name="" id="" class="form-control lang-change mt-2">
                <option value="en" {{ session()->get('lang_code') == 'en' ? 'selected' : '' }}>English</option>
                <option value="bn" {{ session()->get('lang_code') == 'bn' ? 'selected' : '' }}>Bangla</option>
                <option value="ar" {{ session()->get('lang_code') == 'ar' ? 'selected' : '' }}>Arabic</option>
            </select>
        </div>
    </div>
    <h4 class="mt-5">{{ __('text.content') }}</h4>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.1.js"></script>

<script type="text/javascript">
    var url = "{{ route('lang.change') }}";

    $('.lang-change').change(function () {
        let lang_code = $(this).val();
        window.location.href = url + "?lang=" + lang_code;
    })
</script>

</body>
</html>
