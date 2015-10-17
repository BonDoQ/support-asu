<head>
  <title></title>
  <style type="text/css">
    body {
      font-family: "Helvetica Neue", Helvetica, Arial;
      font-size: 14px;
      line-height: 20px;
      font-weight: 400;
      color: #3b3b3b;
      -webkit-font-smoothing: antialiased;
      font-smoothing: antialiased;
      background: #2b2b2b;
    }

    .wrapper {
      margin: 0 auto;
      padding: 40px;
      max-width: 90%;
    }

    .table {
      margin: 0 0 40px 0;
      width: 100%;
      box-shadow: 0 1px 3px rgba(0, 0, 0, 0.2);
      display: table;
    }
    @media screen and (max-width: 580px) {
      .table {
        display: block;
      }
    }

    .row {
      display: table-row;
      background: #f6f6f6;
    }
    .row:nth-of-type(odd) {
      background: #e9e9e9;
    }
    .row.header {
      font-weight: 900;
      color: #ffffff;
      background: #ea6153;
    }
    .row.green {
      background: #27ae60;
    }
    .row.blue {
      background: #2980b9;
    }
    @media screen and (max-width: 580px) {
      .row {
        padding: 8px 0;
        display: block;
      }
    }

    .cell {
      padding: 6px 12px;
      display: table-cell;
    }
    @media screen and (max-width: 580px) {
      .cell {
        padding: 2px 12px;
        display: block;
      }
    }
  </style>
</head>
<body>
  <div class="wrapper">
  
    <div class="table">
      
      <div class="row header {{$color}}">
        <div class="cell">
          ID
        </div>
        <div class="cell">
          Name
        </div>
        <div class="cell">
          E-mail
        </div>
        <div class="cell">
          Mobile
        </div>
        <div class="cell">
          Faculty
        </div>
        <div class="cell">
          Year
        </div>
        <div class="cell">
          Committee
        </div>
        <div class="cell">
          Day
        </div>
        <div class="cell">
          Time
        </div>
        <div class="cell">
          Comments
        </div>
      </div>
      
      <?php $i=1; ?>
      @foreach($records as $record)
      <div class="row">
        <div class="cell">
          {{$i}}
        </div>
        <div class="cell">
          {{$record->name}}
        </div>
        <div class="cell">
          {{$record->email}}
        </div>
        <div class="cell">
          {{$record->mobile}}
        </div>
        <div class="cell">
          {{$record->university}}
        </div>
        <div class="cell">
          {{$record->academic_year}}
        </div>
        <div class="cell">
          {{$record->committee}}
        </div>
        <div class="cell">
          {{$record->day}}
        </div>
        <div class="cell">
          {{$record->time}}
        </div>
        <div class="cell">
          {{$record->comments}}
        </div>
      </div>
      <?php ++$i; ?>
      @endforeach
      
    </div>

  </div>
</body>