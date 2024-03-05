<div id="modal-mini" class="lqd-modal lity-hide" data-modal-type="box">
    <div class="lqd-modal-inner">
        <div class="lqd-modal-head"></div>
        <div class="lqd-modal-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col col-12 p-0">
                        <div class="ld-fancy-heading">
                            <h3 class="ld-fh-element mb-1em text-18">
                                Send a message
                            </h3>
                        </div>
                        <div class="w-full relative mb-35">
                            <span
                                class="w-full block border-top border-gray-100"
                            ></span>
                        </div>
                        <div
                            class="lqd-contact-form lqd-contact-form-inputs-round lqd-contact-form-button-block lqd-contact-form-button-round mb-2em"
                        >
                            <div role="form" lang="en-US">
                                <div class="screen-reader-response">
                                    <p
                                        role="status"
                                        aria-live="polite"
                                        aria-atomic="true"
                                    ></p>
                                </div>
                                <form
                                    action="{{route('contact.send')}}"
                                    method="POST"
                                    class="lqd-cf-form"
                                    novalidate="novalidate"
                                    data-status="init"
                                >
                                @csrf
                                    <p>
                                        <span
                                            class="lqd-form-control-wrap block mb-20"
                                        >
                                            <input
                                                class="text-slate-200 text-size-inherit font-medium bg-gray-100 rounded-4 border-none px-2em"
                                                type="text"
                                                name="name"
                                                value=""
                                                size="40"
                                                aria-required="true"
                                                aria-invalid="false"
                                                placeholder="Name"
                                            />
                                        </span>
                                        <span
                                            class="lqd-form-control-wrap block mb-20"
                                        >
                                            <input
                                                class="text-slate-200 text-size-inherit font-medium bg-gray-100 rounded-4 border-none px-2em"
                                                type="hidden"
                                                name="subject"
                                                value="help"
                                            />
                                        </span>
                                        <span
                                            class="lqd-form-control-wrap block mb-20"
                                        >
                                            <input
                                                class="text-slate-200 text-size-inherit font-medium bg-gray-100 rounded-4 border-none px-2em"
                                                type="email"
                                                name="email"
                                                value=""
                                                size="40"
                                                aria-required="true"
                                                aria-invalid="false"
                                                placeholder="Email Address"
                                            />
                                        </span>
                                        <span
                                            class="lqd-form-control-wrap block mb-20"
                                        >
                                            <textarea
                                                class="text-slate-200 text-size-inherit font-medium bg-gray-100 rounded-4 border-none px-2em"
                                                name="message"
                                                cols="10"
                                                rows="3"
                                                aria-invalid="false"
                                                placeholder="Message"
                                            ></textarea>
                                        </span>
                                    </p>
                                    <p>
                                        <input
                                            type="submit"
                                            value="Send a message"
                                            class="has-spinner text-14 font-medium h-40 border-none bg-primary text-white"
                                        />
                                    </p>
                                </form>
                                <div
                                    class="lqd-cf-response-output"
                                ></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="lqd-modal-foot"></div>
    </div>
</div>