<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP BRUH</title>
</head>
<body>


    <?php 
$result = "";
class calculator
{
    var $a;
    var $b;
    
    function checkopration($oprator)
    {
        switch($oprator)
        {
            case '+':
                return $this->a + $this->b;
                break;
                
                case '-':
                    return $this->a - $this->b;
                    break;
                    
                    case '*':
                        return $this->a * $this->b;
                        break;
                        
                        case '/':
                            return $this->a / $this->b;
                            break;
                            
                            default:
                            return "Sorry No command found";
                        }   
                    }
                    function getresult($a, $b, $c)
    {
        $this->a = $a;
        $this->b = $b;
        return $this->checkopration($c);
    }
}

$cal = new calculator();
if(isset($_POST['submit']))
{   
    $result = $cal->getresult($_POST['n1'],$_POST['n2'],$_POST['op']);
}
?>

<form method="post">
    <table align="center">
        <tr>
            </tr>
            <tr>
                <td>Enter 1st Number</td>
                <td><input type="text" name="n1"></td>
            </tr>
        
            <tr>
                <td>Enter 2nd Number</td>
                <td><input type="text" name="n2"></td>
            </tr>
            
            <tr>
                <td>Select Oprator</td>
                <td><select name="op">
                    <option value="+">+</option>
                    <option value="-">-</option>
                    <option value="*">*</option>
                    <option value="/">/</option>
                </select></td>
            </tr>
            
            <tr>
                <td></td>
                <td><input type="submit" name="submit" value="                =                "></td>
            </tr>
            <td><strong><?php echo $result; ?><strong></td>
        
    </table>
</form>

</body>
</html>
