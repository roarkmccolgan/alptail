<div class="relative flex items-center w-full text-gray-500 focus-within:text-gray-800">
    <svg class="w-5 fill-current duration-150 transition absolute left-0 ml-2" fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
        <path d="M9.81556 2.70007c-1.82343 0-3.6468.69368-5.0343 2.08118-2.775 2.775-2.775 7.29365 0 10.06865 1.3875 1.3875 3.20633 2.0815 5.04383 2.0815 1.83751 0 3.65631-.694 5.04381-2.0815 2.7563-2.775 2.756-7.29365-.019-10.06865-1.3875-1.3875-3.2109-2.08118-5.03434-2.08118zM9.80641 3.8064c1.53749 0 3.07489.58095 4.23739 1.7622 2.3438 2.34375 2.3437 6.1502.0187 8.4939-2.3437 2.3437-6.15013 2.3437-8.49388 0-2.34375-2.3437-2.34375-6.15015 0-8.4939 1.1625-1.1625 2.70029-1.7622 4.23779-1.7622zm0 1.125c-1.29375 0-2.51265.5061-3.4314 1.4436-.88125.88125-1.36867 2.02507-1.42492 3.26257-.01875.31875.22507.56243.54382.58123h.01868c.3 0 .54375-.24387.5625-.54387.0375-.95625.43103-1.83758 1.08728-2.51258.7125-.7125 1.65029-1.10595 2.64404-1.10595.31879 0 .56249-.24375.56249-.5625s-.2437-.5625-.56249-.5625zM6.56251 12c-.14918 0-.29226.0593-.39774.1648-.10549.1054-.16476.2485-.16476.3977s.05927.2923.16476.3977c.10548.1055.24856.1648.39774.1648.14919 0 .29226-.0593.39775-.1648.10549-.1054.16475-.2485.16475-.3977s-.05926-.2923-.16475-.3977C6.85477 12.0593 6.7117 12 6.56251 12zm9.06809 3.0938c-.1429 0-.2836.0563-.3867.1688-.225.225-.225.5811 0 .7873l.4688.4688c-.1125.225-.1689.4688-.1689.7313 0 .45.1687.8813.4875 1.2001l2.4001 2.3624c.3375.3375.7685.5061 1.1997.5061.4313 0 .8626-.1687 1.2001-.4874.6562-.6563.6562-1.7249 0-2.3811l-2.3998-2.4002c-.3187-.3187-.7501-.4874-1.2001-.4874-.2625 0-.5063.0563-.7313.1688l-.4687-.4687c-.1125-.1125-.2577-.1688-.4007-.1688zm1.6007 1.575c.15 0 .3.0563.3937.1688l2.3811 2.3812c.225.225.225.5811 0 .7873-.225.225-.5811.225-.7873 0l-2.3811-2.3624c-.1125-.1125-.1689-.2624-.1689-.4124 0-.15.0564-.2999.1689-.3937.1125-.1125.2436-.1688.3936-.1688z"/>
    </svg>

    <input  
    x-ref="search-bar"
    x-model.debounce="searchTerm"
    aria-label="Search for components..."
    type="search" placeholder="Search components..." class="px-4 pl-10 py-5 w-full border-b-2 border-gray-300 text-gray-800 transition duration-150 focus:outline-none focus:border-secondary">
</div>