<!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright © Developed by <a href="http://osamasejoal.com/" target="_blank">Samalogy</a> 2021</p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->

		<!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->


    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="{{asset('backend/assets')}}/vendor/global/global.min.js"></script>
	<script src="{{asset('backend/assets')}}/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
	<script src="{{asset('backend/assets')}}/vendor/chart.js/Chart.bundle.min.js"></script>
    <script src="{{asset('backend/assets')}}/js/custom.min.js"></script>
	<script src="{{asset('backend/assets')}}/js/deznav-init.js"></script>
	
	<!-- Counter Up -->
    <script src="{{asset('backend/assets')}}/vendor/waypoints/jquery.waypoints.min.js"></script>
    <script src="{{asset('backend/assets')}}/vendor/jquery.counterup/jquery.counterup.min.js"></script>	
		
	<!-- Apex Chart -->
	<script src="{{asset('backend/assets')}}/vendor/apexchart/apexchart.js"></script>	
	
	<!-- Chart piety plugin files -->
	<script src="{{asset('backend/assets')}}/vendor/peity/jquery.peity.min.js"></script>
	
	<!-- Dashboard 1 -->
	<script src="{{asset('backend/assets')}}/js/dashboard/dashboard-1.js"></script>

    {{-- Bootstrap Toggle --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap5-toggle@4.3.1/js/bootstrap5-toggle.min.js"></script>

    @yield('script-content')
	
	
</body>

</html>