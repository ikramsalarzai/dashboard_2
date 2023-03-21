<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
</head>

<link rel="stylesheet" type="text/css" href="https://nebosh.azurewebsites.net/Content/bootstrap.min.css">

<body>
    
    <div style="padding: 10px;">
        <img src="https://nebosh.azurewebsites.net/Content/Images/NeboshLogo.jpg" height="200" width="200"
            style="display:block; margin-left:auto; margin-right:auto" />
    
        <h2 style="text-align:center">THIS IS A VALID CERTIFICATE</h2>
        <hr />
        <div>
            <h4>PLEASE ENSURE THAT THE DETAILS ON THE PRINTED CERTIFICATE MATCH THE VERIFIED DETAILS BELOW:</h4>
            <hr />
            <dl class="dl-horizontal">
                <dd>
                    <strong>Learner Name: </strong>{{$student->name}}
                </dd>
    
                <dd>
                    <strong>Learner Number: </strong>{{$student->learner_number}}
                </dd>
    
                <dd>
                    <strong>Qualification Name: </strong>{{$student->course_name}}
                </dd>
                <dd>
                    <strong>SQA Reference: </strong>{{$student->sqa}}
                </dd>
    
                <dd>
                    <strong>Date Awarded: </strong>0{{$student->date}}
                </dd>
    
                <dd>
                    <strong>Certificate log Number: </strong>{{$student->certificate}}
                </dd>
    
            </dl>
        </div>
    </div>
</body>