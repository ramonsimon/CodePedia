<div class="flex flex-row justify-center overflow-x-auto">

    <div class="flex bg-white ml-9 mt-5 rounded-xl items-center flex-col pb-10 mb-10"
         style="width: 1000px;">

        <div class="flex ml-5 px-2 py-6 mb-8">
            <a href="#" class="flex-none">
                <img src="https://source.unsplash.com/200x200/?face&crop=face&v=1" alt="avatar"
                     class="w-14 h-14 rounded-xl">
            </a>
            <div class="mx-4">
                <h4 class="text-xl font-semibold">
                    <a href="#" class="hover:underline">A random title can go here</a>
                </h4>
                <div class="text-gray-600 mt-3 line-clamp-3">
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                    Aenean commodo ligula eget dolor. Aenean massa.
                    Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                    Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.
                    Nulla consequat massa quis enim.
                    Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.
                    In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo.
                    Nullam dictum felis eu pede mollis pretium. Integer tincidunt.
                    Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus.
                    Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.
                    Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus.
                    Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum.
                    Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi.
                </div>
            </div>
        </div>

        <!--alleen reageren mogelijk voor docenten en studenten die ingelod zijn -->
        <div class="flex flex-col items-center justify-center">
            <div class="flex flex-col items-center justify-center">
                <div class="flex space-x-96 mb-5">
                    <div class="text-black uppercase font-bold text-center text-l mt-5 mb-3">
                        Reageren
                    </div>
                </div>

                <form method="post" action="" class="w-72">
                    <div class="flex mb-2 w-72">
                    <textarea type="text" name="name" id="name"
                              class="rounded-lg flex-1 appearance-none border border-amber-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                              placeholder="Naam..."></textarea>
                    </div>

                    <div style="width: 300px;">
                        <button type="submit"
                                class="w-72 py-2 px-4 bg-amber-500 hover:bg-amber-600 focus:ring-amber-400 text-white w-full transition ease-in duration-200 text-center text-base font-semibold shadow-md focus:outline-none focus:ring rounded-lg">
                            Reageer
                        </button>
                    </div>
                </form>
            </div>

            <!-- alleen zichtbaar als er reacties zijn -->
            <div class="flex flex-col items-center justify-center">
                <div class="flex space-x-96 mb-5">
                    <div class="text-black uppercase font-bold text-center text-l mt-5 mb-3">
                        Reacties
                    </div>
                </div>

                <div style="width: 600px;">
                    <div class="flex flex-row">
                        <h4 class="text-l font-semibold uppercase font-bold">
                            <a href="#">Naam reaguurder</a>
                        </h4>

                        <!-- alleen zichtbaar voor docenten en gebruiker die heeft gereageerd -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-10" viewBox="0 0 20 20" fill="gray">
                            <path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z"/>
                            <path fill-rule="evenodd"
                                  d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z"
                                  clip-rule="evenodd"/>
                        </svg>

                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-1" viewBox="0 0 20 20" fill="gray">
                            <path fill-rule="evenodd"
                                  d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                  clip-rule="evenodd"/>
                        </svg>
                    </div>

                    <div class="flex flex-row">
                        <div class="flex text-gray-600 mt-3 line-clamp-3">
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                            Aenean commodo ligula eget dolor. Aenean massa.
                            Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                            Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.
                            Nulla consequat massa quis enim.
                        </div>

                        <div class="flex flex-col ml-3 -mt-7">
                            <div class="text-center">
                                <div class="font-semibold text-xl">33</div>
                                <div class="text-gray-500 text-l">Votes</div>
                            </div>

                            <div class="mt-1">
                                <button
                                    class="w-15 h-11 bg-gray-200 border border-gray-200 hover:border-gray-400 font-bold text-xxs uppercase rounded-xl transition duration-150 ease-in px-4 py-3"
                                    style="font-size: 12px;">
                                    Vote
                                </button>
                            </div>
                        </div>
                    </div>

                    <form class="flex flex-row h-12 mt-3">
                        <div class="flex mb-2 w-96 mr-3">
                            <textarea type="text" name="name" id="name"
                                      class="rounded-lg flex-1 appearance-none border border-amber-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                                      placeholder="Naam..."></textarea>
                        </div>
                        <div style="width: 300px;">
                            <button type="submit"
                                    class="w-36 py-2 px-4 bg-amber-500 hover:bg-amber-600 focus:ring-amber-400 text-white w-full transition ease-in duration-200 text-center text-base font-semibold shadow-md focus:outline-none focus:ring rounded-lg">
                                Reageer
                            </button>
                        </div>
                    </form>

                    <div class="mt-2" style="width: 550px; margin-left: 52px;">
                        <div class="flex flex-row">
                            <h4 class="text-l font-semibold uppercase font-bold">
                                <a href="#">Naam reaguurder</a>
                            </h4>

                            <!-- alleen zichtbaar voor docenten en gebruiker die heeft gereageerd -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-10" viewBox="0 0 20 20"
                                 fill="gray">
                                <path
                                    d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z"/>
                                <path fill-rule="evenodd"
                                      d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z"
                                      clip-rule="evenodd"/>
                            </svg>

                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-1" viewBox="0 0 20 20"
                                 fill="gray">
                                <path fill-rule="evenodd"
                                      d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                      clip-rule="evenodd"/>
                            </svg>
                        </div>

                        <div class="flex flex-row">
                            <div class="text-gray-600 mt-3 line-clamp-3">
                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                                Aenean commodo ligula eget dolor.
                            </div>

                            <div class="flex flex-col ml-3 -mt-7">
                                <div class="text-center">
                                    <div class="font-semibold text-m">12</div>
                                    <div class="text-gray-500 text-s">Votes</div>
                                </div>

                                <div class="mt-1">
                                    <button
                                        class="w-15 h-11 bg-gray-200 border border-gray-200 hover:border-gray-400 font-bold uppercase rounded-xl transition duration-150 ease-in px-4 py-3"
                                        style="font-size: 12px;">
                                        Vote
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>


    </div>
</div>
