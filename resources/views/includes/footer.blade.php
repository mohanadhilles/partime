             </div>
                <!--/.row-->
            </div>

        </div>
        <!--/.container-fluid-->
    </main>
  

   @include('includes.aside')

<footer class="footer">
        <span class="text-left">
           &copy;

            <?php
                             $year = 2020;
                              echo (date("Y") == $year) ? $year : "{$year} - ". date("Y");
                              ?>   {{ $siteSetting->site_name }}. {{__('All Rights Reserved')}}.
        </span>
        <span class="pull-right">

        </span>
    </footer>