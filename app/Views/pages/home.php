<script type="text/javascript">

      // Load the Visualization API and the corechart package.
      google.charts.load('current', {'packages':['corechart']});

      // Set a callback to run when the Google Visualization API is loaded.
      google.charts.setOnLoadCallback(drawThChart);
      google.charts.setOnLoadCallback(drawThaiChart);

      // Callback that creates and populates a data table,
      // instantiates the pie chart, passes in the data and
      // draws it.
      function drawThChart() {

        // Create the data table

        var data = google.visualization.arrayToDataTable([
          ["โดเมน", "จำนวนโดเมน", { role: "style" }, { role: 'annotation' }],
          ['.ac.th', 7316, 'stroke-color: #DC143C; stroke-opacity: 0.7; stroke-width: 1; fill-color: #DC143C; fill-opacity: 0.2', '7,316(9.85%)'],
          ['.co.th', 44844, 'stroke-color: #00008B; stroke-opacity: 0.7; stroke-width: 1; fill-color: #00008B; fill-opacity: 0.2', '44,844(60.35%)'],
          ['.go.th', 9331, 'stroke-color: #FF8C00; stroke-opacity: 0.7; stroke-width: 1; fill-color: #FF8C00; fill-opacity: 0.2', '9,331(12.56%)'],
          ['.in.th', 11459, 'stroke-color: #9400D3; stroke-opacity: 0.7; stroke-width: 1; fill-color: #9400D3; fill-opacity: 0.2', '11,458(15.42%)'],
          ['.mi.th', 21, 'stroke-color: #696969; stroke-opacity: 0.7; stroke-width: 1; fill-color: #696969; fill-opacity: 0.2', '21(0.03%)'],
          ['.net.th', 22, 'stroke-color: #FFD700; stroke-opacity: 0.7; stroke-width: 1; fill-color: #FFD700; fill-opacity: 0.2', '22(0.03%)'],
          ['.or.th', 1309, 'stroke-color: #008000; stroke-opacity: 0.7; stroke-width: 1; fill-color: #008000; fill-opacity: 0.2', '1,309(1.76%)']
        ]);


        // Set chart options
        var options = {
                        title:'ข้อมูล .th ณ. 09/2564',
                        width: '100%',
                        height: '100%',
                        bar: {groupWidth: "50%"},
                        legend: { position: "none" },
                        annotations: {
                          alwaysOutside: true,
                          highContrast: true,  // default is true, but be sure
                          textStyle: {
                              bold: true
                          }
                        }
                      };

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.BarChart(document.getElementById('th_div'));
        chart.draw(data, options);
      }

      function drawThaiChart() {

        // Create the data table

        var data = google.visualization.arrayToDataTable([
          ["โดเมน", "จำนวนโดเมน", { role: "style" }, { role: 'annotation' }],
          ['.ศึกษา.ไทย', 2881, 'stroke-color: #DC143C; stroke-opacity: 0.7; stroke-width: 1; fill-color: #DC143C; fill-opacity: 0.2','2,881(13.14%)'],
          ['.ธุรกิจ.ไทย', 9663, 'stroke-color: #00008B; stroke-opacity: 0.7; stroke-width: 1; fill-color: #00008B; fill-opacity: 0.2','9,663(44.09%)'],
          ['.รัฐบาล.ไทย', 4820, 'stroke-color: #FF8C00; stroke-opacity: 0.7; stroke-width: 1; fill-color: #FF8C00; fill-opacity: 0.2','4,820(21.99%)'],
          ['.ไทย', 4174, 'stroke-color: #9400D3; stroke-opacity: 0.7; stroke-width: 1; fill-color: #9400D3; fill-opacity: 0.2','4,174(19.04%)'],
          ['.ทหาร.ไทย', 11, 'stroke-color: #696969; stroke-opacity: 0.7; stroke-width: 1; fill-color: #696969; fill-opacity: 0.2','11(0.05%)'],
          ['.เน็ต.ไทย', 8, 'stroke-color: #FFD700; stroke-opacity: 0.7; stroke-width: 1; fill-color: #FFD700; fill-opacity: 0.2','8(0.04%)'],
          ['.องค์กร.ไทย', 361, 'stroke-color: #008000; stroke-opacity: 0.7; stroke-width: 1; fill-color: #008000; fill-opacity: 0.2','361(1.65%)']
        ]);

        // Set chart options
        var options = {
                        title:'ข้อมูล .ไทย ณ. 09/2564',
                        width: '100%',
                        height: '100%',
                        bar: {groupWidth: "50%"},
                        legend: { position: "none" },
                        annotations: {
                          alwaysOutside: true,
                          highContrast: true,  // default is true, but be sure
                          textStyle: {
                              bold: true
                          }
                        }
                      };

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.BarChart(document.getElementById('thai_div'));
        chart.draw(data, options);
      }
</script>
<div class="container">
  <div class="row">
    <div class="col">
      <div class="p-2 border bg-light">กราฟสถิติโดเมน .th</div>
      <div class="googlechart" id="th_div"></div>
    </div>
    <div class="col">
      <div class="p-2 border bg-light">กราฟสถิติโดเมน .ไทย</div>
      <div class="googlechart" id="thai_div"></div>
    </div>
  </div>
  <div class="row">
    <div class="col">
      <div class="p-2 border bg-light">ตารางข้อมูลสถิติโดเมน .th และ .ไทย</div>
      <table class="table table-striped table-bordered datatable">
        <thead>
          <tr>
            <th rowspan="2">ปี</th>
            <th rowspan="2">เดือน</th>
            <th>.ac.th</th>
            <th>.co.th</th>
            <th>.go.th</th>
            <th>.in.th</th>
            <th>.mi.th</th>
            <th>.net.th</th>
            <th>.or.th</th>
            <th rowspan="2">รวม</th>
          </tr>
          <tr>
            <th>.ศึกษา.ไทย</th>
            <th>.ธุรกิจ.ไทย</th>
            <th>.รัฐบาล.ไทย</th>
            <th>.ไทย</th>
            <th>.ทหาร.ไทย</th>
            <th>.เน็ต.ไทย</th>
            <th>.องค์กร.ไทย</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>2564</td>
            <td>กันยายน</td>
            <td>7,316 <br/> 2,881</td>
            <td>44,844 <br/> 9,663</td>
            <td>9,331 <br/> 4,820</td>
            <td>11,459 <br/> 4,174</td>
            <td>21 <br/> 11</td>
            <td>22 <br/> 8</td>
            <td>1,309 <br/> 361</td>
            <td>74,302 <br/> 21,918</td>
          </tr>
          <tr>
            <td>2564</td>
            <td>สิงหาคม</td>
            <td>7,316 <br/> 2,881</td>
            <td>44,844 <br/> 9,663</td>
            <td>9,331 <br/> 4,820</td>
            <td>11,459 <br/> 4,174</td>
            <td>21 <br/> 11</td>
            <td>22 <br/> 8</td>
            <td>1,309 <br/> 361</td>
            <td>74,302 <br/> 21,918</td>
          </tr>
          <tr>
            <td>2564</td>
            <td>กรกฎาคม</td>
            <td>7,316 <br/> 2,881</td>
            <td>44,844 <br/> 9,663</td>
            <td>9,331 <br/> 4,820</td>
            <td>11,459 <br/> 4,174</td>
            <td>21 <br/> 11</td>
            <td>22 <br/> 8</td>
            <td>1,309 <br/> 361</td>
            <td>74,302 <br/> 21,918</td>
          </tr>
          <tr>
            <td>2564</td>
            <td>มิถุนายน</td>
            <td>7,316 <br/> 2,881</td>
            <td>44,844 <br/> 9,663</td>
            <td>9,331 <br/> 4,820</td>
            <td>11,459 <br/> 4,174</td>
            <td>21 <br/> 11</td>
            <td>22 <br/> 8</td>
            <td>1,309 <br/> 361</td>
            <td>74,302 <br/> 21,918</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
