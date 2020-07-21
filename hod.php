<!DOCTYPE html>
<html>
  <head>
    <style>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      .button 
      {
        background-color: #4CAF50; /* Green */
        border: none;
        color: white;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        cursor: pointer;
      }
      .button1 
      {
        padding: 8px 25px;
      }
    </style>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script type='text/javascript'>//<![CDATA[ 
    $(window).load(function(){
    //save the selector so you don't have to do the lookup everytime
    $dropdown = $("#contextMenu");
    $(".actionButton").click(function() {
        //get row ID
        var id = $(this).closest("tr").children().first().html();
        //move dropdown menu
        $(this).after($dropdown);
        //update links
        // $dropdown.find(".payLink").attr("href", "/transaction/pay?id="+id);
        // $dropdown.find(".delLink").attr("href", "/transaction/delete?id="+id);
        //show dropdown
        $(this).dropdown();
    });
    });//]]>  
    </script>
</head>
<body>
  <table id="myTable" class="table table-striped table-dark">
    <thead>
      <tr>
        <th>Marksheet ID</th>
        <th>Subject</th>
        <th>Faculty</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>PUCEC100B32017</td>
        <td>Applied Mathematics</td>
        <td>
        <select id="Mars" name="Mars">
          <option value="Prof. A">Prof. A</option>
          <option value="Prof. B">Prof. B</option>
          <option value="Prof. C">Prof. C</option>
          <option value="Prof. D">Prof. D</option>
          <option value="Prof. E">Prof. E</option>
          <option value="Prof. F">Prof. F</option>
          <option value="Prof. G">Prof. G</option>
          <option value="Prof. H">Prof. H</option>
          <option value="Prof. I">Prof. I</option>
          <option value="Prof. J">Prof. J</option>

        </select>
    </td>
          <td><button class='btn btn-success'>Allot</button></td>
      </tr>
      <tr>
        <td>CAUCEC101B32017</td>
        <td>Applied Physics</td>
        <td>

        <select id="Mars" name="Mars">
          <option value="Prof. A">Prof. A</option>
          <option value="Prof. B">Prof. B</option>
          <option value="Prof. C">Prof. C</option>
          <option value="Prof. D">Prof. D</option>
          <option value="Prof. E">Prof. E</option>
          <option value="Prof. F">Prof. F</option>
          <option value="Prof. G">Prof. G</option>
          <option value="Prof. H">Prof. H</option>
          <option value="Prof. I">Prof. I</option>
          <option value="Prof. J">Prof. J</option>

        </select>
    </td>
    <td><button class='btn btn-success'>Allot</button></td>
      </tr>
      <tr>
        <td>PUCEC102B32017</td>
        <td>Applied Chemistry</td>
        <td>
        <select id="Mars" name="Mars">
          <option value="Prof. A">Prof. A</option>
          <option value="Prof. B">Prof. B</option>
          <option value="Prof. C">Prof. C</option>
          <option value="Prof. D">Prof. D</option>
          <option value="Prof. E">Prof. E</option>
          <option value="Prof. F">Prof. F</option>
          <option value="Prof. G">Prof. G</option>
          <option value="Prof. H">Prof. H</option>
          <option value="Prof. I">Prof. I</option>
          <option value="Prof. J">Prof. J</option>

        </select>
    </td>
    <td><button class='btn btn-success'>Allot</button></td>
      </tr>
      <tr>
        <td>TUCEC100B32017</td>
        <td>Engineering Mechanics</td>
        <td>
         <select id="Mars" name="Mars">
          <option value="Prof. A">Prof. A</option>
          <option value="Prof. B">Prof. B</option>
          <option value="Prof. C">Prof. C</option>
          <option value="Prof. D">Prof. D</option>
          <option value="Prof. E">Prof. E</option>
          <option value="Prof. F">Prof. F</option>
          <option value="Prof. G">Prof. G</option>
          <option value="Prof. H">Prof. H</option>
          <option value="Prof. I">Prof. I</option>
          <option value="Prof. J">Prof. J</option>

        </select>
    </td>
    <td><button class='btn btn-success'>Allot</button></td>
      </tr>
      <tr>
        <td>PUCEC100B32017</td>
        <td>C programming</td>
        <td>
        <select id="Mars" name="Mars">
          <option value="Prof. A">Prof. A</option>
          <option value="Prof. B">Prof. B</option>
          <option value="Prof. C">Prof. C</option>
          <option value="Prof. D">Prof. D</option>
          <option value="Prof. E">Prof. E</option>
          <option value="Prof. F">Prof. F</option>
          <option value="Prof. G">Prof. G</option>
          <option value="Prof. H">Prof. H</option>
          <option value="Prof. I">Prof. I</option>
          <option value="Prof. J">Prof. J</option>

        </select>
    </td>
    <td><button class='btn btn-success'>Allot</button></td>
      </tr>
      <tr>
        <td>PUCEC100B32017</td>
        <td>Data Structures</td>
        <td>
        <select id="Mars" name="Mars">
          <option value="Prof. A">Prof. A</option>
          <option value="Prof. B">Prof. B</option>
          <option value="Prof. C">Prof. C</option>
          <option value="Prof. D">Prof. D</option>
          <option value="Prof. E">Prof. E</option>
          <option value="Prof. F">Prof. F</option>
          <option value="Prof. G">Prof. G</option>
          <option value="Prof. H">Prof. H</option>
          <option value="Prof. I">Prof. I</option>
          <option value="Prof. J">Prof. J</option>

        </select>
    </td>
    <td><button class='btn btn-success'>Allot</button></td>
      </tr>
      <tr>
        <td>PUCEC100B32017</td>
        <td>Object Oriented Programming language</td>
        <td>
        <select id="Mars" name="Mars">
          <option value="Prof. A">Prof. A</option>
          <option value="Prof. B">Prof. B</option>
          <option value="Prof. C">Prof. C</option>
          <option value="Prof. D">Prof. D</option>
          <option value="Prof. E">Prof. E</option>
          <option value="Prof. F">Prof. F</option>
          <option value="Prof. G">Prof. G</option>
          <option value="Prof. H">Prof. H</option>
          <option value="Prof. I">Prof. I</option>
          <option value="Prof. J">Prof. J</option>

        </select>
    </td>
    <td><button class='btn btn-success'>Allot</button></td>
      </tr>
      <tr>
        <td>PUCEC100B32017</td>
        <td>Python Language</td>
        <td>
        <select id="Mars" name="Mars">
          <option value="Prof. A">Prof. A</option>
          <option value="Prof. B">Prof. B</option>
          <option value="Prof. C">Prof. C</option>
          <option value="Prof. D">Prof. D</option>
          <option value="Prof. E">Prof. E</option>
          <option value="Prof. F">Prof. F</option>
          <option value="Prof. G">Prof. G</option>
          <option value="Prof. H">Prof. H</option>
          <option value="Prof. I">Prof. I</option>
          <option value="Prof. J">Prof. J</option>

        </select>
    </td>
    <td><button class='btn btn-success'>Allot</button></td>
      </tr>
      <tr>
        <td>PUCEC100B32017</td>
        <td>Analysis of Algorithm</td>
        <td>
        <select id="Mars" name="Mars">
          <option value="Prof. A">Prof. A</option>
          <option value="Prof. B">Prof. B</option>
          <option value="Prof. C">Prof. C</option>
          <option value="Prof. D">Prof. D</option>
          <option value="Prof. E">Prof. E</option>
          <option value="Prof. F">Prof. F</option>
          <option value="Prof. G">Prof. G</option>
          <option value="Prof. H">Prof. H</option>
          <option value="Prof. I">Prof. I</option>
          <option value="Prof. J">Prof. J</option>

        </select>
    </td>
    <td><button class='btn btn-success'>Allot</button></td>
      </tr>
      <tr>
        <td>PUCEC100B32017</td>
        <td>Artificial Intelligence</td>
        <td>
        <select id="Mars" name="Mars">
          <option value="Prof. A">Prof. A</option>
          <option value="Prof. B">Prof. B</option>
          <option value="Prof. C">Prof. C</option>
          <option value="Prof. D">Prof. D</option>
          <option value="Prof. E">Prof. E</option>
          <option value="Prof. F">Prof. F</option>
          <option value="Prof. G">Prof. G</option>
          <option value="Prof. H">Prof. H</option>
          <option value="Prof. I">Prof. I</option>
          <option value="Prof. J">Prof. J</option>

        </select>
    </td>
    <td><button class='btn btn-success'>Allot</button></td>
      </tr>
    </tbody>
  </table>

  
</body>
</html>