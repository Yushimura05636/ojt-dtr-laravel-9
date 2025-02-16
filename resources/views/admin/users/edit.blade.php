<x-modal.forgot-password id="forgot-password-modal" />
<x-modal.confirmation-email id="confirmation-email-modal" />

<x-main-layout>

    <div class="h-full w-full">
        <x-form.container routeName="users.settings.update" method="POST" className="h-auto w-full flex flex-col gap-5">
            @method('PUT')

            @if (session('success'))
                <x-modal.flash-msg msg="success" />
            @elseif (session('update'))
                <x-modal.flash-msg msg="update" />
            @elseif ($errors->has('invalid'))
                <x-modal.flash-msg msg="invalid" />
            @elseif (session('invalid'))
                <x-modal.flash-msg msg="invalid" />
            @endif

            <div
                class="w-full flex items-center justify-between gap-5 bg-white p-3 border border-gray-200 shadow-lg sticky top-[120px] z-30 rounded-full">
                <x-button routePath="admin.users.details" :params="['id' => $user->id]" label="Back" tertiary button
                    leftIcon="eva--arrow-back-fill" className="px-8" />
                <x-button primary label="Save Changes" submit leftIcon="eva--save-outline" className="px-6" />
            </div>

            <div class="flex flex-col lg:!gap-7 gap-5 pb-10 h-full">
                <section class="flex flex-col gap-5 w-full p-7 border border-gray-200 rounded-lg bg-white">

                    <div class="">
                        <div class="flex items-center w-full justify-center flex-col gap-4">
                            <div class="w-auto h-auto">
                                <x-image
                                    className="lg:!w-80 md:!w-60 w-40 lg:!h-80 md:!h-60 h-40 rounded-full border border-custom-orange"
                                    path="resources/img/default-male.png" />
                            </div>
                            <x-button tertiary leftIcon="bx--image" label="Change" button className="px-10" />
                        </div>
                    </div>
                    <x-form.section-title title="Personal Information" vectorClass="!h-3" />
                    <div class="grid grid-cols-3 w-full gap-5">
                        <x-form.input label="First Name" type="text" name_id="firstname" placeholder="John"
                            value="{{ $user->firstname }}" labelClass="text-lg font-medium" small />
                        <x-form.input label="Last Name" type="text" name_id="lastname" placeholder="Doe"
                            value="{{ $user->lastname }}" labelClass="text-lg font-medium" small />
                        <x-form.input label="Middle Name" type="text" name_id="middlename"
                            value="{{ $user->middlename }}" placeholder="Watson" labelClass="text-lg font-medium"
                            small />
                    </div>
                    <div class="grid grid-cols-2 w-full gap-5">
                        <x-form.input label="Gender" name_id="gender" placeholder="Select a gender" small
                            value="{{ $user->gender }}" type="select" :options="['male' => 'Male', 'female' => 'Female']" />

                        <x-form.input label="Phone" type="text" name_id="phone" placeholder="+63"
                            value="{{ $user->phone }}" labelClass="text-lg font-medium" small />
                    </div>
                    <div class="grid grid-cols-2 w-full gap-5">
                        <x-form.input label="Address" type="text" name_id="address" placeholder="Davao City"
                            value="{{ $user->address }}" labelClass="text-lg font-medium" small />
                        <x-form.input label="School" type="text" name_id="school" placeholder="School name"
                            value="{{ $user->school }}" labelClass="text-lg font-medium" small />
                    </div>
                </section>

                <section class="flex flex-col gap-5 w-full p-7 border border-gray-200 rounded-lg bg-white">

                    <x-form.section-title title="Account Information" vectorClass="!h-3" />
                    <div class="grid grid-cols-2 w-full gap-5">
                        <x-form.input label="Email" type="email" name_id="email" value="{{ $user->email }}"
                            placeholder="example@gmail.com" labelClass="text-lg font-medium" small />
                        <x-form.input label="School ID" type="text" name_id="student_no" placeholder="School ID"
                            value="{{ $user->student_no }}" labelClass="text-lg font-medium" small />
                        <x-form.input label="Starting Date" type="date" name_id="starting_date"
                            value="{{ $user->starting_date }}" placeholder="MMM DD, YYY"
                            labelClass="text-lg font-medium" small />
                        <x-form.input label="Expiry Date" type="date" name_id="expiry_date"
                            value="{{ $user->expiry_date }}" placeholder="MMM DD, YYY"
                            labelClass="text-lg font-medium" small />
                        <x-form.input label="Status" type="select" name_id="status" value="{{ $user->status }}"
                            placeholder="{{ ucfirst($user->status) }}" :options="['active' => 'Active', 'inactive' => 'Inactive']"
                            labelClass="text-lg font-medium" small />
                    </div>
                </section>

                <section class="flex flex-col gap-5 w-full p-7 border border-gray-200 rounded-lg bg-white">

                    <x-form.section-title title="Emergency Contact" vectorClass="!h-3" />
                    <div class="grid grid-cols-3 w-full gap-5">
                        <x-form.input label="Full Name" type="text" name_id="emergency_contact_fullname"
                            value="{{ $user->emergency_contact_fullname }}" placeholder="Johny Doe"
                            labelClass="text-lg font-medium" small />
                        <x-form.input label="Contact No." type="text" name_id="emergency_contact_number"
                            value="{{ $user->emergency_contact_number }}" placeholder="+63"
                            labelClass="text-lg font-medium" small />
                        <x-form.input label="Address" type="text" name_id="emergency_contact_address"
                            value="{{ $user->emergency_contact_address }}" placeholder="Davao City"
                            labelClass="text-lg font-medium" small />
                        <x-form.input type="text" name_id="user_id" hidden placeholder="user id"
                            value="{{ $user->id }}" labelClass="text-lg font-medium" small />
                    </div>
                </section>
            </div>
        </x-form.container>
    </div>
</x-main-layout>
