 
 <nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="#">Dashboard</a></li>
            <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Company</a>
                        <ul class="dropdown-menu">
                            
                                    <ul id="pro">
                                       <li><a href="">Employee Data</a></li>
                                        <li><a href="">Attendance Monitor</a></li>
                                        <li><a href="">Employee Benefits</a></li>
                                         <li><a href="">Site Records</a></li>
                                         <li><a href="">Bills & Payments</a></li>
                                    </ul>
                           </ul></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">

      </ul>
    </div>
  </div>
</nav>

  <nav id="sidebar">
		<div class="secondary">
			<img src="../assets/images/helmet.png" class="center-block">
		</div>
		<ul class="sidebar-menu">
            <li class="active"><a data-toggle="tooltip" data-placement="right"
              title="" data-original-title="Analytics" class="csstooltip" href="../dashboard/">
                <i class="fa fa-line-chart icons"></i>
             </a></li>
             <li><a 
              data-toggle="tooltip" data-placement="right" title="Sites" href="../sites/">
                <i class='fa fa-building-o'></i>
             </a></li>
             <li><a 
              data-toggle="tooltip" data-placement="right" title="Stocks" href="../stocks/">
              <i class="fa fa-cubes"></i>
             </a></li>
             
        </ul>    
		
		
</nav>  
     
<script>
    $(document).ready(function(){
      $('[data-toggle="tooltip"]').tooltip();   
    });
    </script>

    <script>
      (function ($) {
        $.fn.countTo = function (options) {
          options = options || {};
          
          return $(this).each(function () {
            // set options for current element
            var settings = $.extend({}, $.fn.countTo.defaults, {
              from:            $(this).data('from'),
              to:              $(this).data('to'),
              speed:           $(this).data('speed'),
              refreshInterval: $(this).data('refresh-interval'),
              decimals:        $(this).data('decimals')
            }, options);
            
            // how many times to update the value, and how much to increment the value on each update
            var loops = Math.ceil(settings.speed / settings.refreshInterval),
              increment = (settings.to - settings.from) / loops;
            
            // references & variables that will change with each update
            var self = this,
              $self = $(this),
              loopCount = 0,
              value = settings.from,
              data = $self.data('countTo') || {};
            
            $self.data('countTo', data);
            
            // if an existing interval can be found, clear it first
            if (data.interval) {
              clearInterval(data.interval);
            }
            data.interval = setInterval(updateTimer, settings.refreshInterval);
            
            // initialize the element with the starting value
            render(value);
            
            function updateTimer() {
              value += increment;
              loopCount++;
              
              render(value);
              
              if (typeof(settings.onUpdate) == 'function') {
                settings.onUpdate.call(self, value);
              }
              
              if (loopCount >= loops) {
                // remove the interval
                $self.removeData('countTo');
                clearInterval(data.interval);
                value = settings.to;
                
                if (typeof(settings.onComplete) == 'function') {
                  settings.onComplete.call(self, value);
                }
              }
            }
            
            function render(value) {
              var formattedValue = settings.formatter.call(self, value, settings);
              $self.html(formattedValue);
            }
          });
        };
        
        $.fn.countTo.defaults = {
          from: 0,               // the number the element should start at
          to: 0,                 // the number the element should end at
          speed: 1000,           // how long it should take to count between the target numbers
          refreshInterval: 100,  // how often the element should be updated
          decimals: 0,           // the number of decimal places to show
          formatter: formatter,  // handler for formatting the value before rendering
          onUpdate: null,        // callback method for every time the element is updated
          onComplete: null       // callback method for when the element finishes updating
        };
        
        function formatter(value, settings) {
          return value.toFixed(settings.decimals);
        }
      }(jQuery));
      
      jQuery(function ($) {
        // custom formatting example
        $('.count-number').data('countToOptions', {
        formatter: function (value, options) {
          return value.toFixed(options.decimals).replace(/\B(?=(?:\d{3})+(?!\d))/g, ',');
        }
        });
        
        // start all the timers
        $('.timer').each(count);  
        
        function count(options) {
        var $this = $(this);
        options = $.extend({}, options || {}, $this.data('countToOptions') || {});
        $this.countTo(options);
        }
      });</script>
 <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
google.load("visualization", "1", {packages:["corechart"]});
google.setOnLoadCallback(drawChart1);
function drawChart1() {
  var data = google.visualization.arrayToDataTable([
    ['Year', 'Sales', 'Expenses'],
    ['2004',  1000,      400],
    ['2005',  1170,      460],
    ['2006',  660,       1120],
    ['2007',  1030,      540]
  ]);

  var options = {
    title: 'Company Performance',
    hAxis: {title: 'Year', titleTextStyle: {color: 'red'}}
 };

var chart = new google.visualization.ColumnChart(document.getElementById('chart_div1'));
  chart.draw(data, options);
}

google.load("visualization", "1", {packages:["corechart"]});
google.setOnLoadCallback(drawChart2);
function drawChart2() {
  var data = google.visualization.arrayToDataTable([
    ['Year', 'Sales', 'Expenses'],
    ['2013',  1000,      400],
    ['2014',  1170,      460],
    ['2015',  660,       1120],
    ['2016',  1030,      540]
  ]);

  var options = {
    title: 'Company Performance',
    hAxis: {title: 'Year',  titleTextStyle: {color: '#333'}},
    vAxis: {minValue: 0}
  };

  var chart = new google.visualization.AreaChart(document.getElementById('chart_div2'));
  chart.draw(data, options);
}

$(window).resize(function(){
  drawChart1();
  drawChart2();
});

</script>
     