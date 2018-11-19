<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link href="http://localhost/ciblog/assets/kalender/dateTimePicker.css" rel="stylesheet" type="text/css" />
  </head>
  <body>
    <div class="container">
    	<br><br><br>
      <h2>- Kalender Skypea -</h2>
      <br><br>
      <div class="row">
        <div class="col-xss-4">
          <div id="basic" data-toggle="calendar"></div>
        </div>
        <div class="col-xss-8">
        </div>
      </div>
    <script type="text/javascript" src="http://localhost/ciblog/assets/kalender/jquery.min.js"></script>
    <script type="text/javascript" src="http://localhost/ciblog/assets/kalender/dateTimePicker.min.js"></script>
    <script type="text/javascript">
    $(document).ready(function()
    {
      $('#basic').calendar();
      $('#glob-data').calendar(
      {
        unavailable: ['*-*-8', '*-*-10']
      });
      $('#custom-first-day').calendar(
      {
        day_first: 2,
        unavailable: ['2014-07-10'],
        onSelectDate: function(date, month, year)
        {
          alert([year, month, date].join('-') + ' is: ' + this.isAvailable(date, month, year));
        }
      });
      $('#custom-name').calendar(
      {
        day_name: ['CN', 'Hai', 'Ba', 'Tư', 'Năm', 'Sáu', 'Bảy'],
        month_name: ['Tháng Một', 'Tháng Hai', 'Tháng Ba', 'Tháng Tư', 'Tháng Năm', 'Tháng Sáu', 'Tháng Bảy', 'Tháng Tám', 'Tháng Chín', 'Tháng Mười', 'Tháng Mười Một', 'Tháng Mười Hai'],
        unavailable: ['2014-07-10']
      });
      $('#dynamic-data').calendar(
      {
        adapter: 'server/adapter.php'
      });
      $('#show-next-month').calendar(
      {
        num_next_month: 1,
        num_prev_month: 1,
        unavailable: ['*-*-9', '*-*-10']
      });
    });
    </script>
  </body>
</html>

<html>