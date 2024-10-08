
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CONTACT FORM</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Afacad+Flux:wght@100..1000&display=swap" rel="stylesheet">
</head>
<body>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $fname = htmlspecialchars($_POST['fname']);
            $lname = htmlspecialchars($_POST['lname']);
            $age = (int)$_POST['age'];
            $contact = htmlspecialchars($_POST['contact']);
            $address = htmlspecialchars($_POST['address']);

            if (!empty($fname) && !empty($lname) && !empty($age) && !empty($contact) && !empty($address)) {
                class Contact {
                    public $fname;
                    public $lname;
                    public $age;
                    public $contact;
                    public $address;

                    public function __construct($fname, $lname, $age, $contact, $address) {
                        $this->fname = $fname;
                        $this->lname = $lname;
                        $this->age = $age;
                        $this->contact = $contact;
                        $this->address = $address;
                    }

                    public function displayContact() {
                        echo '<div class="container">
                                <div class="contact">
                                    <div class="header text-white border-bottom mb-3">
                                        <h1><i class="bi bi-info-circle-fill me-2"></i>CONTACT INFORMATION</h1>
                                    </div>
                                    <div class="contact_form">
                                        <p>Name: ' . $this->fname . ' ' . $this->lname . '</p>
                                        <p>Age: ' . $this->age . '</p>
                                        <p>Contact: ' . $this->contact . '</p>
                                        <p>Address: ' . $this->address . '</p>
                                    </div>
                                </div>
                            </div>';
                    }
                }

                $new_contact = new Contact($fname, $lname, $age, $contact, $address);
                $new_contact->displayContact();

                $contact_data = array(
                    "First Name" => $fname,
                    "Last Name" => $lname,
                    "Age" => $age,
                    "Contact" => $contact,
                    "Address" => $address
                );

            } else {
                echo "Please fill all fields.";
            }
        } else {
            echo "Invalid request method.";
        }
    ?>

    <script src="myscripts.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>`
</body>
</html>
