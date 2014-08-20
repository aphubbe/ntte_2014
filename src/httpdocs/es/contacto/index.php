<?php
    include dirname(__FILE__) . '/../../../lib/app/includes/common.php';
    include INCLUDES_PATH . 'form.php';
?>
<!DOCTYPE html>
<html lang="<?php echo LANG ?>" id="ntte">
<head>
    <title>Contáctenos | Next Travel Trade Exchange.com</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <?php include INCLUDES_PATH . 'head.php'; ?>
</head>
<body id="contact">
    <?php include INCLUDES_PATH . '/header.php'; ?>
    <main>
        <div class="main_wrapper">
            <div class="main_inner">
                <div class="main_content">
                    <div class="main_content-header">
                        <h1>
                            Contáctenos
                        </h1>
                    </div>
                    <?php if ($success) : ?>
                    <h2>
                        Su mensaje ha sido enviado con exitosamente.
                    </h2>
                    <p>
                        <br>Nos pondremos en contacto con usted en cuanto sea posible.
                    </p>
                    <?php else : ?>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
                        <fieldset>
                            <label>
                                Nombre<span class="required">* <?php echo $nameErr;?></span>
                            </label>
                            <input name="name" type="text" value="<?php echo $name;?>"<?php if (!empty($nameErr)) : ?> class="error"<?php endif ?> />
                        </fieldset>
                        <fieldset>
                            <label>
                                E-Mail<span class="required">* <?php echo $emailErr;?></span>
                            </label>
                            <input name="email" type="text" value="<?php echo $email;?>"<?php if (!empty($emailErr)) : ?> class="error"<?php endif ?> />
                        </fieldset>
                        <fieldset>
                            <label>
                                Departamento
                            </label>
                            <input name="dept" type="text" value="<?php echo $dept;?>" />
                        </fieldset>
                        <fieldset>
                            <label>
                                Asunto<span class="required">* <?php echo $subjectErr;?></span>
                            </label>
                            <input name="subject" type="text" value="<?php echo $subject;?>"<?php if (!empty($subjectErr)) : ?> class="error"<?php endif ?> />
                        </fieldset>
                        <fieldset>
                            <label>
                                Comentario<span class="required">* <?php echo $commentErr;?></span>
                            </label>
                            <textarea name="comment"<?php if (!empty($commentErr)) : ?> class="error"<?php endif ?>><?php echo $comment;?></textarea>
                        </fieldset>
                        <fieldset>
                            <label>
                                Pruebe que es una persona<span class="required">* <?php echo $captchaErr;?></span>
                            </label>
                            <?php
                                require_once(LIB_PATH . 'vendor/recaptcha/recaptcha-php-1.11/recaptchalib.php');
                                echo recaptcha_get_html($strRecaptchaPublicKey);
                            ?>
                        </fieldset>
                        <fieldset>
                            <input name="submit" type="submit" value="Send">
                        </fieldset>
                    </form>                    
                    <?php endif ?>                                       
                </div>
                <div class="main_sidebar">
                    <?php include INCLUDES_PATH . 'sidebar.php'; ?>
                </div>
                <div class="clear"></div>
            </div>            
        </div>
    </main>
    <?php include INCLUDES_PATH . '/footer.php'; ?>
</body>
</html>