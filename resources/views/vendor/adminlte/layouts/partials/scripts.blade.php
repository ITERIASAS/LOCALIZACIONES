<!-- REQUIRED JS SCRIPTS -->

<!-- JQuery and bootstrap are required by Laravel 5.3 in resources/assets/js/bootstrap.js-->
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<!-- Laravel App -->
<script src="{{ url (mix('/js/app.js')) }}" type="text/javascript"></script>
{{-- SweetAlert2 JS--}}
<script src="{{ asset('/js/sweetalert2/sweetalert2.all.min.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>
<script src="{{ asset('/js/messages/messages.js') }}"></script>

<!-- Optionally, you can add Slimscroll and FastClick plugins.
      Both of these plugins are recommended to enhance the
      user experience. Slimscroll is required when using the
      fixed layout. -->
