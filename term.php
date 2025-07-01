<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Terms of Service | Company Name</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary-color: #2563eb;
            --secondary-color: #1e40af;
            --accent-color: #3b82f6;
            --light-bg: #f8fafc;
            --dark-text: #1e293b;
            --light-text: #64748b;
            --border-color: #e2e8f0;
            --card-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
            --transition: all 0.3s ease;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: var(--dark-text);
            background: linear-gradient(135deg, #f5f7fa 0%, #e4e7eb 100%);
            min-height: 100vh;
            padding: 2rem 0;
        }
        
        .tos-container {
            max-width: 1000px;
            margin: 0 auto;
            background: white;
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }
        
        .tos-header {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            color: white;
            padding: 3rem 2rem;
            text-align: center;
        }
        
        .tos-header h1 {
            font-size: 2.5rem;
            margin-bottom: 0.5rem;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 1rem;
        }
        
        .last-updated {
            font-size: 1rem;
            opacity: 0.9;
            margin-top: 1rem;
        }
        
        .tos-content {
            padding: 3rem;
        }
        
        .intro-text {
            font-size: 1.1rem;
            margin-bottom: 2.5rem;
            padding-bottom: 1.5rem;
            border-bottom: 1px solid var(--border-color);
            color: var(--dark-text);
            line-height: 1.8;
        }
        
        .section-title {
            color: var(--secondary-color);
            margin: 2.5rem 0 1.25rem;
            font-size: 1.6rem;
            display: flex;
            align-items: center;
            gap: 0.75rem;
        }
        
        .section-title i {
            background: var(--light-bg);
            color: var(--primary-color);
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.1rem;
        }
        
        .section-content {
            padding-left: 0.5rem;
        }
        
        .section-content p {
            margin-bottom: 1rem;
            color: var(--dark-text);
        }
        
        .section-content ul {
            margin: 1.2rem 0;
            padding-left: 1.8rem;
        }
        
        .section-content li {
            margin-bottom: 0.8rem;
            position: relative;
        }
        
        .section-content li::before {
            content: "•";
            color: var(--primary-color);
            font-weight: bold;
            position: absolute;
            left: -1rem;
        }
        
        .highlight-box {
            background: var(--light-bg);
            border-left: 4px solid var(--accent-color);
            padding: 1.5rem;
            margin: 1.8rem 0;
            border-radius: 0 8px 8px 0;
        }
        
        .contact-section {
            background: var(--light-bg);
            border-radius: 10px;
            padding: 2rem;
            margin-top: 3rem;
            display: flex;
            align-items: center;
            gap: 1.5rem;
            border: 1px solid var(--border-color);
        }
        
        .contact-section i {
            background: var(--primary-color);
            color: white;
            min-width: 60px;
            height: 60px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
        }
        
        .contact-info h3 {
            color: var(--secondary-color);
            margin-bottom: 0.75rem;
            font-size: 1.4rem;
        }
        
        .contact-info p {
            margin: 0.4rem 0;
            color: var(--dark-text);
        }
        
        .acceptance-section {
            margin-top: 3rem;
            padding: 1.5rem;
            background: #e6f0ff;
            border-radius: 8px;
            border: 1px dashed var(--accent-color);
            text-align: center;
        }
        
        /* Responsive Styles */
        @media (max-width: 768px) {
            .tos-content {
                padding: 2rem;
            }
            
            .tos-header {
                padding: 2rem 1.5rem;
            }
            
            .tos-header h1 {
                font-size: 2rem;
            }
            
            .section-title {
                font-size: 1.4rem;
            }
            
            .contact-section {
                flex-direction: column;
                text-align: center;
            }
        }
        
        @media (max-width: 480px) {
            body {
                padding: 1rem;
            }
            
            .tos-content {
                padding: 1.5rem;
            }
            
            .tos-header h1 {
                flex-direction: column;
                gap: 0.5rem;
            }
            
            .section-title {
                font-size: 1.3rem;
            }
        }
    </style>
</head>
<body>
    <!-- Terms of Service Content -->
    <div class="tos-container">
        <div class="tos-header">
            <h1>
                <i class="fas fa-file-contract"></i>
                Terms of Service
            </h1>
            <p class="last-updated">Last Updated: July 1, 2025</p>
        </div>
        
        <div class="tos-content">
            <p class="intro-text">
                Welcome to our platform! These Terms of Service ("Terms") govern your access to and use of our website, 
                services, and applications (collectively, the "Service"). By accessing or using the Service, 
                you agree to be bound by these Terms. If you are using the Service on behalf of an organization, 
                you are agreeing to these Terms for that organization and representing that you have the authority 
                to bind that organization to these Terms.
            </p>
            
            <!-- Terms Sections -->
            <div class="tos-section">
                <h2 class="section-title">
                    <i class="fas fa-gavel"></i>
                    1. Acceptance of Terms
                </h2>
                <div class="section-content">
                    <p>By using our Service, you confirm that you accept these Terms and that you agree to comply with them. If you do not agree to these Terms, you must not use our Service.</p>
                    <p>We recommend that you print a copy of these Terms for future reference.</p>
                </div>
            </div>
            
            <div class="tos-section">
                <h2 class="section-title">
                    <i class="fas fa-user-check"></i>
                    2. Account Registration
                </h2>
                <div class="section-content">
                    <p>To access certain features of the Service, you may be required to create an account. When registering, you agree to:</p>
                    <ul>
                        <li>Provide accurate, current, and complete information</li>
                        <li>Maintain the security of your password and accept all risks of unauthorized access</li>
                        <li>Promptly update any information to keep it accurate, current, and complete</li>
                        <li>Be responsible for all activities that occur under your account</li>
                    </ul>
                    <p>We reserve the right to suspend or terminate your account if any information provided is inaccurate or incomplete.</p>
                </div>
            </div>
            
            <div class="tos-section">
                <h2 class="section-title">
                    <i class="fas fa-ban"></i>
                    3. Prohibited Activities
                </h2>
                <div class="section-content">
                    <p>You agree not to engage in any of the following prohibited activities:</p>
                    <ul>
                        <li>Copying, distributing, or disclosing any part of the Service in any medium</li>
                        <li>Using any automated system to access the Service in a manner that sends more request messages than a human could reasonably produce</li>
                        <li>Transmitting spam, chain letters, or other unsolicited email</li>
                        <li>Attempting to interfere with, compromise the system integrity or security, or decipher any transmissions</li>
                        <li>Taking any action that imposes an unreasonable load on our infrastructure</li>
                        <li>Uploading invalid data, viruses, worms, or other software agents</li>
                        <li>Collecting or harvesting any personally identifiable information</li>
                        <li>Using the Service for any illegal purpose or in violation of any laws</li>
                    </ul>
                </div>
            </div>
            
            <div class="tos-section">
                <h2 class="section-title">
                    <i class="fas fa-coins"></i>
                    4. Payments and Billing
                </h2>
                <div class="section-content">
                    <p>Certain aspects of the Service may be provided for a fee. By selecting a paid service, you agree to pay the specified fees.</p>
                    <ul>
                        <li>All fees are exclusive of taxes, which we will charge as applicable</li>
                        <li>You must provide a valid payment method</li>
                        <li>Fees are non-refundable except as required by law</li>
                        <li>We may change our prices at any time by posting notice to your account</li>
                    </ul>
                    <div class="highlight-box">
                        <p><strong>Subscription Renewal:</strong> Paid subscriptions automatically renew for additional periods equal to the expiring subscription term unless you cancel before the renewal date.</p>
                    </div>
                </div>
            </div>
            
            <div class="tos-section">
                <h2 class="section-title">
                    <i class="fas fa-copyright"></i>
                    5. Intellectual Property Rights
                </h2>
                <div class="section-content">
                    <p>The Service and its original content, features, and functionality are and will remain the exclusive property of our company and its licensors.</p>
                    <ul>
                        <li>You are granted a limited, non-exclusive, non-transferable license to access and use the Service</li>
                        <li>You may not modify, publish, transmit, reverse engineer, or create derivative works of any material</li>
                        <li>All trademarks, service marks, logos, and brand names are the property of their respective owners</li>
                    </ul>
                    <p>Any feedback, comments, or suggestions you provide may be used without any obligation to you.</p>
                </div>
            </div>
            
            <div class="tos-section">
                <h2 class="section-title">
                    <i class="fas fa-exclamation-triangle"></i>
                    6. Disclaimers and Limitations of Liability
                </h2>
                <div class="section-content">
                    <p>The Service is provided "as is" without any warranties, express or implied. We do not warrant that:</p>
                    <ul>
                        <li>The Service will be uninterrupted, secure, or available at any particular time or location</li>
                        <li>Any errors or defects will be corrected</li>
                        <li>The Service is free of viruses or other harmful components</li>
                        <li>The results of using the Service will meet your requirements</li>
                    </ul>
                    <p>To the maximum extent permitted by law, in no event shall we be liable for any indirect, incidental, special, consequential, or punitive damages, or any loss of profits or revenues, whether incurred directly or indirectly.</p>
                </div>
            </div>
            
            <div class="tos-section">
                <h2 class="section-title">
                    <i class="fas fa-handshake"></i>
                    7. Termination
                </h2>
                <div class="section-content">
                    <p>We may terminate or suspend your access to the Service immediately, without prior notice or liability, for any reason whatsoever, including without limitation if you breach the Terms.</p>
                    <p>Upon termination, your right to use the Service will immediately cease. If you wish to terminate your account, you may simply discontinue using the Service.</p>
                </div>
            </div>
            
            <div class="tos-section">
                <h2 class="section-title">
                    <i class="fas fa-balance-scale"></i>
                    8. Governing Law
                </h2>
                <div class="section-content">
                    <p>These Terms shall be governed and construed in accordance with the laws of the State of California, United States, without regard to its conflict of law provisions.</p>
                    <p>Our failure to enforce any right or provision of these Terms will not be considered a waiver of those rights.</p>
                </div>
            </div>
            
            <div class="contact-section">
                <i class="fas fa-question-circle"></i>
                <div class="contact-info">
                    <h3>Questions About Our Terms?</h3>
                    <p>If you have any questions about these Terms of Service, please contact us:</p>
                    <p><strong>Email:</strong> legal@company.com</p>
                    <p><strong>Phone:</strong> +1 (800) 123-4567</p>
                    <p><strong>Address:</strong> 123 Business Ave, San Francisco, CA 94107, USA</p>
                </div>
            </div>
            
            <div class="acceptance-section">
                <p><strong>By using our Service, you acknowledge that you have read, understood, and agree to be bound by these Terms of Service.</strong></p>
            </div>
        </div>
    </div>
</body>
</html>