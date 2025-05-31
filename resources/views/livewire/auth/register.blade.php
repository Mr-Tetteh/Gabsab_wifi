<div class="sm:mx-auto sm:w-full sm:max-w-4xl w-full flex flex-row">


    <div class="flex flex-col gap-6 w-full">
        <x-auth-header :title="__('Create an account')"
                       :description="__('Enter your details below to create your account')"/>

        <!-- Session Status -->
        <x-auth-session-status class="text-center" :status="session('status')"/>

        <form wire:submit.prevent="register" class="flex flex-col gap-6">
            <!-- Name Fields - Side by side -->
            <div class="grid grid-cols-2 gap-4">
                <flux:input
                    wire:model="first_name"
                    :label="__('First name')"
                    type="text"
                    required
                    autofocus
                    autocomplete="first_name"
                    :placeholder="__('First Name')"
                />

                <flux:input
                    wire:model="last_name"
                    :label="__('Last name')"
                    type="text"
                    required
                    autocomplete="last_name"
                    :placeholder="__('Last Name')"
                />
            </div>

            <!-- Contact & Email - Side by side -->
            <div class="grid grid-cols-2 gap-4">
                <flux:input
                    wire:model="email"
                    :label="__('Email address')"
                    type="email"
                    required
                    autocomplete="email"
                    placeholder="email@example.com"
                />

                <flux:input
                    wire:model="contact"
                    :label="__('Contact')"
                    type="tel"
                    required
                    autocomplete="contact"
                    :placeholder="__('Contact')"
                />
            </div>

            <!-- Address & Gender - Side by side -->
            <div class="grid grid-cols-2 gap-4">
                <flux:input
                    wire:model="address"
                    :label="__('Address')"
                    type="text"
                    required
                    autocomplete="address"
                    :placeholder="__('Address')"
                />

                <flux:select
                    wire:model="gender"
                    :label="__('Gender')"
                    placeholder="Select Gender..."
                >
                    <flux:select.option>Male</flux:select.option>
                    <flux:select.option>Female</flux:select.option>
                </flux:select>
            </div>

            <!-- Password Fields - Side by side -->
            <div class="grid grid-cols-2 gap-4">
                <flux:input
                    wire:model="password"
                    :label="__('Password')"
                    type="password"
                    required
                    autocomplete="new-password"
                    :placeholder="__('Password')"
                    viewable
                />

                <flux:input
                    wire:model="password_confirmation"
                    :label="__('Confirm password')"
                    type="password"
                    required
                    autocomplete="new-password"
                    :placeholder="__('Confirm password')"
                    viewable
                />
            </div>

            <div class="grid grid-cols-2 gap-4">
                <a wire:click="openModal" class="text-blue-600 hover:underline cursor-pointer">Terms and Conditions</a>

                <flux:field variant="inline">
                    <flux:checkbox wire:model="terms" />

                    <flux:label>I agree to the terms and conditions</flux:label>

                    <flux:error name="terms" />
                </flux:field>
            <!-- Terms and Conditions -->

            </div>

            @if($modal)
                <body class="bg-gray-100 p-8">

                <div class="relative z-10" aria-labelledby="modal-title" role="dialog" aria-modal="true">
                    <!-- Background overlay -->
                    <div class="fixed inset-0 bg-gray-900/50 backdrop-blur-sm transition-opacity" aria-hidden="true"></div>

                    <!-- Modal container -->
                    <div class="fixed inset-0 z-10 w-screen overflow-y-auto">
                        <div class="flex min-h-full items-center justify-center p-4 text-center sm:p-6">

                            <!-- Modal panel -->
                            <div class="relative transform overflow-hidden rounded-xl bg-white text-left shadow-2xl transition-all sm:my-8 sm:w-full sm:max-w-4xl">

                                <!-- Header -->
                                <div class="bg-gradient-to-r from-blue-600 to-blue-700 px-6 py-4">
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0">
                                            <svg class="h-8 w-8 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h3.75M9 15h3.75M9 18h3.75m3-3h3.75m-3.75-3h3.75m-3.75-6h3.75M5.25 3h13.5c.621 0 1.125.504 1.125 1.125v15.75c0 .621-.504 1.125-1.125 1.125H5.25c-.621 0-1.125-.504-1.125-1.125V4.125C4.125 3.504 4.629 3 5.25 3z" />
                                            </svg>
                                        </div>
                                        <div class="ml-4">
                                            <h3 class="text-xl font-bold text-white" id="modal-title">
                                                Terms and Conditions
                                            </h3>
                                            <p class="text-blue-100 text-sm">Gabsab IT Service Agreement</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Content -->
                                <div class="bg-white px-6 py-6 max-h-96 overflow-y-auto">
                                    <div class="prose prose-sm max-w-none">

                                        <div class="bg-blue-50 border-l-4 border-blue-400 p-4 mb-6">
                                            <div class="flex">
                                                <div class="flex-shrink-0">
                                                    <svg class="h-5 w-5 text-blue-400" viewBox="0 0 20 20" fill="currentColor">
                                                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd" />
                                                    </svg>
                                                </div>
                                                <div class="ml-3">
                                                    <p class="text-sm text-blue-700">
                                                        <strong>Last Updated:</strong> May 31, 2025
                                                    </p>
                                                    <p class="text-sm text-blue-600 mt-1">
                                                        Welcome to Gabsab IT Service! Please read these terms carefully as they govern your use of our internet services.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="space-y-6">

                                            <!-- Section 1: Definitions -->
                                            <div class="border-l-2 border-gray-200 pl-4">
                                                <h4 class="text-lg font-semibold text-gray-900 mb-3">1. Definitions</h4>
                                                <div class="space-y-2 text-sm text-gray-700">
                                                    <p><strong>"Gabsab IT Service," "We," "Us," "Our":</strong> Refers to Gabsab IT Service.</p>
                                                    <p><strong>"Customer," "You," "Your":</strong> Refers to the individual or entity subscribing to our services.</p>
                                                    <p><strong>"Service(s)":</strong> Refers to the internet access and related services provided by Gabsab IT Service.</p>
                                                    <p><strong>"Equipment":</strong> Refers to the router, antenna, cables, and any other devices provided by Gabsab IT Service to enable connection to our network.</p>
                                                    <p><strong>"Installation Fee":</strong> The one-time fee payable by the Customer for the setup and installation of the Equipment.</p>
                                                    <p><strong>"Subscription Fee":</strong> The recurring monthly fee payable by the Customer for access to the Service.</p>
                                                </div>
                                            </div>

                                            <!-- Section 2: Service Agreement -->
                                            <div class="border-l-2 border-gray-200 pl-4">
                                                <h4 class="text-lg font-semibold text-gray-900 mb-3">2. Service Agreement</h4>
                                                <div class="text-sm text-gray-700 space-y-2">
                                                    <p><strong>2.1 Service Provision:</strong> Gabsab IT Service agrees to provide the Customer with internet access at the agreed-upon location, subject to these Terms and the availability of our network.</p>
                                                    <p><strong>2.2 Service Quality:</strong> We aim to provide a reliable and consistent internet service. However, we do not guarantee uninterrupted service. Service quality may vary depending on location, network congestion, weather conditions, and other factors beyond our reasonable control.</p>
                                                    <p><strong>2.3 Fair Usage:</strong> The Service is intended for normal residential, educational, or business use as applicable. We reserve the right to monitor usage and implement a fair usage policy to prevent abuse or activities that may degrade the network performance for other users.</p>
                                                </div>
                                            </div>

                                            <!-- Section 3: Equipment -->
                                            <div class="border-l-2 border-gray-200 pl-4">
                                                <h4 class="text-lg font-semibold text-gray-900 mb-3">3. Equipment</h4>
                                                <div class="text-sm text-gray-700 space-y-2">
                                                    <p><strong>3.1 Ownership of Equipment:</strong> All Equipment provided by Gabsab IT Service remains the sole property of Gabsab IT Service. The Customer is granted the right to use the Equipment only for the duration of their active subscription to the Service.</p>
                                                    <p><strong>3.2 Installation:</strong> We will install the necessary Equipment at your premises. The Installation Fee covers the standard installation. Additional charges may apply for complex installations.</p>
                                                    <p><strong>3.3 Care of Equipment:</strong> The Customer is responsible for the safekeeping and proper use of the Equipment. The Equipment should not be tampered with, modified, relocated, or repaired by anyone other than an authorized Gabsab IT Service technician.</p>
                                                    <p><strong>3.4 Damage to Equipment:</strong></p>
                                                    <ul class="list-disc list-inside ml-4 space-y-1">
                                                        <li>If any Equipment is damaged, lost, or stolen due to the Customer's negligence, misuse, or willful act, the Customer shall be liable to pay a penalty fee.</li>
                                                        <li>The penalty fee will be determined by Gabsab IT Service based on the cost of repair or replacement of the damaged Equipment.</li>
                                                        <li>Normal wear and tear, or damage caused by events outside the Customer's reasonable control (e.g., natural disasters, manufacturing defects not caused by misuse), may not incur a penalty, at Gabsab IT Service's discretion. The Customer must report such incidents to Gabsab IT Service promptly.</li>
                                                    </ul>
                                                    <p><strong>3.5 Return of Equipment:</strong> Upon termination of the Service, or as stipulated in Clause 5.3, the Customer must allow Gabsab IT Service to retrieve all Equipment in good working condition, subject to normal wear and tear.</p>
                                                </div>
                                            </div>

                                            <!-- Section 4: Fees and Payment -->
                                            <div class="border-l-2 border-gray-200 pl-4">
                                                <h4 class="text-lg font-semibold text-gray-900 mb-3">4. Fees and Payment</h4>
                                                <div class="text-sm text-gray-700 space-y-2">
                                                    <p><strong>4.1 Installation Fee:</strong> The Customer agrees to pay the one-time Installation Fee prior to or on the day of installation. This fee is non-refundable.</p>
                                                    <p><strong>4.2 Subscription Fee:</strong> The Customer agrees to pay the monthly Subscription Fee in advance for each month of service. The due date for payment will be communicated to the Customer.</p>
                                                    <p><strong>4.3 Billing:</strong> Invoices will be provided to the Customer, typically via email or other agreed-upon electronic means.</p>
                                                    <p><strong>4.4 Late Payment:</strong> If the Subscription Fee is not paid by the due date, Gabsab IT Service reserves the right to suspend the Service until payment is received. Continued non-payment may lead to termination of the Service.</p>
                                                    <p><strong>4.5 Price Changes:</strong> Gabsab IT Service reserves the right to change the Subscription Fee or other charges. We will provide at least thirty (30) days' notice to the Customer of any such changes.</p>
                                                </div>
                                            </div>

                                            <!-- Section 5: Subscription, Non-Subscription, and Termination -->
                                            <div class="border-l-2 border-gray-200 pl-4">
                                                <h4 class="text-lg font-semibold text-gray-900 mb-3">5. Subscription, Non-Subscription, and Termination</h4>
                                                <div class="text-sm text-gray-700 space-y-2">
                                                    <p><strong>5.1 Subscription Term:</strong> The initial subscription term will be agreed upon at the time of sign-up. Unless otherwise specified, the service will continue on a month-to-month basis after the initial term.</p>
                                                    <p><strong>5.2 Customer Termination:</strong> The Customer may terminate the Service by providing Gabsab IT Service with at least thirty (30) days' written notice. All outstanding fees must be paid upon termination.</p>
                                                    <p><strong>5.3 Non-Subscription and Equipment Retrieval:</strong></p>
                                                    <ul class="list-disc list-inside ml-4 space-y-1">
                                                        <li>If a Customer fails to pay the Subscription Fee and remains unsubscribed for a continuous period of two (2) calendar months, Gabsab IT Service reserves the right to deactivate the Service and retrieve its Equipment from the Customer's premises.</li>
                                                        <li>We will attempt to notify the Customer prior to such retrieval. The Customer agrees to provide Gabsab IT Service or its authorized representatives reasonable access to the premises for the purpose of retrieving the Equipment.</li>
                                                    </ul>
                                                    <p><strong>5.4 Termination by Gabsab IT Service:</strong> We may suspend or terminate the Service immediately and without notice if:</p>
                                                    <ul class="list-disc list-inside ml-4 space-y-1">
                                                        <li>The Customer breaches any material term of this Agreement.</li>
                                                        <li>The Customer uses the Service for illegal or fraudulent activities.</li>
                                                        <li>The Customer fails to make payments due.</li>
                                                        <li>There are technical or regulatory reasons requiring us to do so.</li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <!-- Section 6: Customer Obligations -->
                                            <div class="border-l-2 border-gray-200 pl-4">
                                                <h4 class="text-lg font-semibold text-gray-900 mb-3">6. Customer Obligations</h4>
                                                <div class="text-sm text-gray-700 space-y-2">
                                                    <p><strong>6.1 Lawful Use:</strong> The Customer agrees to use the Service and Equipment only for lawful purposes and in compliance with all applicable laws and regulations in Ghana.</p>
                                                    <p><strong>6.2 Security:</strong> The Customer is responsible for maintaining the security of their own devices, accounts, and passwords connected to our Service.</p>
                                                    <p><strong>6.3 Access to Premises:</strong> The Customer shall provide Gabsab IT Service employees or authorized representatives with safe and reasonable access to their premises for installation, maintenance, inspection, and retrieval of Equipment.</p>
                                                </div>
                                            </div>

                                            <!-- Section 7: Limitation of Liability -->
                                            <div class="border-l-2 border-gray-200 pl-4">
                                                <h4 class="text-lg font-semibold text-gray-900 mb-3">7. Limitation of Liability</h4>
                                                <div class="text-sm text-gray-700 space-y-2">
                                                    <p><strong>7.1</strong> Gabsab IT Service shall not be liable for any indirect, incidental, special, consequential, or punitive damages, including but not limited to loss of profits, data, or business opportunities, arising out of or in connection with the Service or Equipment.</p>
                                                    <p><strong>7.2</strong> Our total liability to the Customer for any claim arising out of or relating to this Agreement shall not exceed the total Subscription Fees paid by the Customer in the three (3) months preceding the claim.</p>
                                                    <p><strong>7.3</strong> This limitation of liability does not apply to damages caused by Gabsab IT Service's gross negligence or willful misconduct.</p>
                                                </div>
                                            </div>

                                            <!-- Section 8: Indemnification -->
                                            <div class="border-l-2 border-gray-200 pl-4">
                                                <h4 class="text-lg font-semibold text-gray-900 mb-3">8. Indemnification</h4>
                                                <div class="text-sm text-gray-700">
                                                    <p>The Customer agrees to indemnify and hold harmless Gabsab IT Service, its employees, agents, and contractors from and against any and all claims, damages, liabilities, costs, and expenses (including reasonable attorneys' fees) arising out of or related to the Customer's use of the Service or Equipment in breach of these Terms.</p>
                                                </div>
                                            </div>

                                            <!-- Section 9: Amendments -->
                                            <div class="border-l-2 border-gray-200 pl-4">
                                                <h4 class="text-lg font-semibold text-gray-900 mb-3">9. Amendments</h4>
                                                <div class="text-sm text-gray-700">
                                                    <p>Gabsab IT Service reserves the right to amend these Terms and Conditions at any time. We will notify Customers of any significant changes. Continued use of the Service after such notification will constitute acceptance of the amended Terms. The latest version of the Terms and Conditions will be available on our website or upon request.</p>
                                                </div>
                                            </div>

                                            <!-- Section 10: Governing Law and Dispute Resolution -->
                                            <div class="border-l-2 border-gray-200 pl-4">
                                                <h4 class="text-lg font-semibold text-gray-900 mb-3">10. Governing Law and Dispute Resolution</h4>
                                                <div class="text-sm text-gray-700">
                                                    <p>These Terms shall be governed by and construed in accordance with the laws of Ghana. Any dispute arising out of or in connection with these Terms shall be settled amicably through negotiation. If the dispute cannot be resolved amicably, it shall be referred to the appropriate courts of Ghana.</p>
                                                </div>
                                            </div>

                                            <!-- Agreement Acknowledgment -->
                                            <div class="bg-blue-50 border border-blue-200 rounded-lg p-4">
                                                <h4 class="text-lg font-semibold text-gray-900 mb-2 flex items-center">
                                                    <svg class="h-5 w-5 text-blue-600 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                                    </svg>
                                                    Agreement Acknowledgment
                                                </h4>
                                                <p class="text-sm text-blue-700">
                                                    By subscribing to and using Gabsab IT Service, you acknowledge that you have read, understood, and agree to be bound by these Terms and Conditions.
                                                </p>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <!-- Footer Actions -->
                                <div class="bg-gray-50 px-6 py-4 sm:flex sm:flex-row-reverse sm:gap-3">

                                    <button type="button" wire:click="closeModal" class="mt-3 inline-flex w-full justify-center rounded-lg bg-white px-4 py-2.5 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-offset-2 transition-colors sm:mt-0 sm:w-auto">
                                        Cancel
                                    </button>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                </body>
            @endif

            <div class="flex items-center justify-end">
                <flux:button type="submit" variant="primary" class="w-full">
                    {{ __('Create account') }}
                </flux:button>
            </div>
        </form>

        <div class="space-x-1 rtl:space-x-reverse text-center text-sm text-zinc-600 dark:text-zinc-400">
            {{ __('Already have an account?') }}
            <flux:link :href="route('login')" wire:navigate>{{ __('Log in') }}</flux:link>
        </div>
    </div>
</div>
