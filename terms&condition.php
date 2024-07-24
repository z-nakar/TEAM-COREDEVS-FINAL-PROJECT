

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="assets/style.css">
    <title>HOME</title>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap');

:root {
    --main-color: #6b8c21;
    --second-color: #e3f1be;
    --text-color: #1b1b1b;
    --bg-color: #DDD48F;

    /* Box shadow */
    --box-shadow: 2px 2px 10px 4px rgb(14 55 54 / 15%);
}

body {
    font-family: 'Poppins', sans-serif;
    background-color: var(--bg-color);
    color: var(--text-color);
}

.terms-container {
    background: #fff; /* White background */
    padding: 20px;
    border-radius: 10px;
    box-shadow: var(--box-shadow);
    margin: 2rem auto;
    max-width: 800px;
    margin-top: 100px;
}

.terms-container h1,
.terms-container h2 {
    color: var(--main-color);
}

.terms-container h1 {
    font-size: 2rem;
    margin-bottom: 1rem;
}

.terms-container h2 {
    font-size: 1.5rem;
    margin-top: 1.5rem;
}

.terms-container p {
    font-size: 1rem;
    margin-bottom: 1rem;
    line-height: 1.6;
}

.terms-container ul {
    margin-left: 1.5rem;
    margin-bottom: 1rem;
}

.terms-container li {
    margin-bottom: 0.5rem;
}

.restrictions {
    counter-reset: list-counter; /* Initialize counter */
    margin-left: 1.5rem;
    list-style-type: none;
}

.restrictions li::before {
    counter-increment: list-counter; /* Increment counter */
    content: counter(list-counter) ". "; /* Display counter */
    font-weight: bold;
    margin-right: 0.5rem;
}

    </style>
</head>
<body>
<?php include('header.php')?>

<section class="terms-container">
    <h1>Terms and Conditions</h1>
    <p>Welcome to Avocado Street Cafe. If you continue to browse and use this website, you are agreeing to comply with and be bound by the following terms and conditions of use, which together with our privacy policy govern Avocado Street Cafe’s relationship with you in relation to this website. If you disagree with any part of these terms and conditions, please do not use our website.</p>

    <h2>Use of the Website</h2>
    <p>By accessing the website, you warrant and represent to Avocado Street Cafe that you are legally entitled to do so and to make use of information made available via the website.</p>

    <h2>Trademarks</h2>
    <p>The trademarks, names, logos, and service marks (collectively “trademarks”) displayed on this website are registered and unregistered trademarks of Avocado Street Cafe. Nothing contained on this website should be construed as granting any license or right to use any trademark without the prior written permission of Avocado Street Cafe.</p>

    <h2>External Links</h2>
    <p>External links may be provided for your convenience, but they are beyond the control of Avocado Street Cafe and no representation is made as to their content. Use or reliance on any external links and the content thereon provided is at your own risk.</p>

    <h2>Warranties</h2>
    <p>Avocado Street Cafe makes no warranties, representations, statements, or guarantees (whether express, implied in law, or residual) regarding the website.</p>

    <h2>Disclaimer of Liability</h2>
    <p>Avocado Street Cafe shall not be responsible for and disclaims all liability for any loss, liability, damage (whether direct, indirect, or consequential), personal injury, or expense of any nature whatsoever which may be suffered by you or any third party (including your company), as a result of or which may be attributable, directly or indirectly, to your access and use of the website, any information contained on the website, your or your company’s personal information or material and information transmitted over our system. In particular, neither Avocado Street Cafe nor any third party or data or content provider shall be liable in any way to you or to any other person, firm, or corporation whatsoever for any loss, liability, damage (whether direct or consequential), personal injury, or expense of any nature whatsoever arising from any delays, inaccuracies, errors in, or omission of any share price information or the transmission thereof, or for any actions taken in reliance thereon or occasioned thereby or by reason of non-performance or interruption, or termination thereof.</p>

    <h2>Governing Law</h2>
    <p>Use of this website shall in all respects be governed by the laws of the state of Philippines, regardless of the laws that might be applicable under principles of conflicts of law. The parties agree that the courts located in Sta. Maria, Bulacan, Philippines, shall have exclusive jurisdiction over all controversies arising under this agreement and agree that venue is proper in those courts.</p>

    <h2>Intellectual Property Rights</h2>
    <p>Other than the content you own, under these Terms, Avocado Street Cafe and/or its licensors own all the intellectual property rights and materials contained in this Website. You are granted a limited license only for purposes of viewing the material contained on this Website.</p>

    <h2>Restrictions</h2>
    <p>You are specifically restricted from all of the following:</p>
    <ul>
        <li>Publishing any Website material in any other media;</li>
        <li>Selling, sublicensing and/or otherwise commercializing any Website material;</li>
        <li>Publicly performing and/or showing any Website material;</li>
        <li>Using this Website in any way that is or may be damaging to this Website;</li>
        <li>Using this Website in any way that impacts user access to this Website;</li>
        <li>Using this Website contrary to applicable laws and regulations, or in any way may cause harm to the Website, or to any person or business entity;</li>
        <li>Engaging in any data mining, data harvesting, data extracting or any other similar activity in relation to this Website;</li>
        <li>Using this Website to engage in any advertising or marketing.</li>
    </ul>
    <p>Certain areas of this Website are restricted from being accessed by you and Avocado Street Cafe may further restrict access by you to any areas of this Website, at any time, in absolute discretion. Any user ID and password you may have for this Website are confidential and you must maintain confidentiality as well.</p>

    <h2>Your Privacy</h2>
    <p>Please read our Privacy Policy.</p>

    <h2>No warranties</h2>
    <p>This Website is provided "as is," with all faults, and Avocado Street Cafe express no representations or warranties, of any kind related to this Website or the materials contained on this Website. Also, nothing contained on this Website shall be interpreted as advising you.</p>

    <h2>Limitation of liability</h2>
    <p>In no event shall Avocado Street Cafe, nor any of its officers, directors and employees, be held liable for anything arising out of or in any way connected with your use of this Website whether such liability is under contract.  Avocado Street Cafe, including its officers, directors and employees shall not be held liable for any indirect, consequential or special liability arising out of or in any way related to your use of this Website.</p>

    <h2>Indemnification</h2>
    <p>You hereby indemnify to the fullest extent Avocado Street Cafe from and against any and/or all liabilities, costs, demands, causes of action, damages and expenses arising in any way related to your breach of any of the provisions of these Terms.</p>

    <h2>Severability</h2>
    <p>If any provision of these Terms is found to be invalid under any applicable law, such provisions shall be deleted without affecting the remaining provisions herein.</p>

    <h2>Variation of Terms</h2>
    <p>Avocado Street Cafe is permitted to revise these Terms at any time as it sees fit, and by using this Website you are expected to review these Terms on a regular basis.</p>

    <h2>Assignment</h2>
    <p>The Avocado Street Cafe is allowed to assign, transfer, and subcontract its rights and/or obligations under these Terms without any notification. However, you are not allowed to assign, transfer, or subcontract any of your rights and/or obligations under these Terms.</p>

    <h2>Entire Agreement</h2>
    <p>These Terms constitute the entire agreement between Avocado Street Cafe and you in relation to your use of this Website, and supersede all prior agreements and understandings.</p>
</section>













<?php include('footer.php')?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>