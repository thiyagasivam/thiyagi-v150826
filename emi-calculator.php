<?php
$pageTitle = 'EMI Calculator - Calculate Loan EMI Instantly | Thiyagi';
$pageDescription = 'Free EMI calculator to calculate monthly loan EMI, interest payable, and total repayment for home loans, personal loans, car loans, and education loans.';
$pageKeywords = 'EMI calculator, loan EMI, home loan EMI, car loan EMI, personal loan EMI, education loan EMI, monthly installment calculator';
include 'header.php';
?>
<script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.1/dist/chart.umd.min.js"></script>
<style>
:root{--primary:#4f46e5;--primary-light:#818cf8;--primary-bg:#eef2ff;--accent:#10b981;--accent-bg:#ecfdf5;--danger:#ef4444;--warn:#f59e0b;--text:#1e293b;--text-muted:#64748b;--border:#e2e8f0;--card:#ffffff;--bg:#f8fafc;}
*,*::before,*::after{box-sizing:border-box;}
body{background:var(--bg);color:var(--text);font-family:'Inter',-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,sans-serif;}
.emi-wrap{max-width:1200px;margin:0 auto;padding:1rem;}
.emi-hero{text-align:center;padding:2rem 1rem 1.5rem;}
.emi-hero h1{font-size:2rem;font-weight:800;color:var(--text);margin-bottom:.5rem;}
.emi-hero p{color:var(--text-muted);font-size:1rem;max-width:640px;margin:0 auto;}
/* Tabs */
.emi-tabs{display:flex;gap:.5rem;margin-bottom:1.5rem;overflow-x:auto;padding-bottom:.25rem;-webkit-overflow-scrolling:touch;}
.emi-tab{padding:.625rem 1.25rem;border-radius:.5rem;font-size:.875rem;font-weight:600;cursor:pointer;border:2px solid var(--border);background:var(--card);color:var(--text-muted);white-space:nowrap;transition:all .2s;}
.emi-tab:hover{border-color:var(--primary-light);color:var(--primary);}
.emi-tab.active{background:var(--primary);color:#fff;border-color:var(--primary);}
.tab-panel{display:none;}
.tab-panel.active{display:block;}
/* Cards */
.emi-card{background:var(--card);border-radius:.75rem;box-shadow:0 1px 3px rgba(0,0,0,.08);border:1px solid var(--border);padding:1.5rem;margin-bottom:1.5rem;}
.emi-grid{display:grid;gap:1.5rem;}
.emi-grid-2{grid-template-columns:1fr 1fr;}
@media(max-width:768px){.emi-grid-2{grid-template-columns:1fr;}}
/* Slider */
.slider-group{margin-bottom:1.5rem;}
.slider-group label{display:flex;justify-content:space-between;align-items:center;font-size:.875rem;font-weight:600;color:var(--text);margin-bottom:.5rem;}
.slider-group label span{color:var(--primary);font-weight:700;font-size:1rem;}
.slider-row{display:flex;gap:.75rem;align-items:center;}
.slider-row input[type=range]{flex:1;height:6px;-webkit-appearance:none;appearance:none;background:linear-gradient(to right,var(--primary) 0%,#e2e8f0 0%);border-radius:3px;outline:none;cursor:pointer;}
.slider-row input[type=range]::-webkit-slider-thumb{-webkit-appearance:none;width:22px;height:22px;background:var(--primary);border-radius:50%;border:3px solid #fff;box-shadow:0 2px 6px rgba(79,70,229,.4);cursor:pointer;transition:transform .15s;}
.slider-row input[type=range]::-webkit-slider-thumb:hover{transform:scale(1.15);}
.slider-row input[type=range]::-moz-range-thumb{width:22px;height:22px;background:var(--primary);border-radius:50%;border:3px solid #fff;box-shadow:0 2px 6px rgba(79,70,229,.4);cursor:pointer;}
.num-input{width:140px;padding:.5rem .75rem;border:2px solid var(--border);border-radius:.5rem;font-size:.9375rem;font-weight:600;text-align:right;outline:none;transition:border-color .2s;}
.num-input:focus{border-color:var(--primary);}
.slider-bounds{display:flex;justify-content:space-between;font-size:.75rem;color:var(--text-muted);margin-top:.25rem;padding:0 .125rem;}
/* Tenure toggle */
.tenure-toggle{display:inline-flex;border:2px solid var(--border);border-radius:.5rem;overflow:hidden;margin-left:.75rem;}
.tenure-toggle button{padding:.5rem 1rem;font-size:.8125rem;font-weight:600;border:none;cursor:pointer;background:var(--card);color:var(--text-muted);transition:all .2s;}
.tenure-toggle button.active{background:var(--primary);color:#fff;}
/* Results */
.emi-result-hero{background:linear-gradient(135deg,#4f46e5,#7c3aed);border-radius:.75rem;padding:1.5rem;text-align:center;color:#fff;margin-bottom:1rem;}
.emi-result-hero .emi-label{font-size:.875rem;opacity:.85;margin-bottom:.25rem;}
.emi-result-hero .emi-value{font-size:2.25rem;font-weight:800;letter-spacing:-.02em;}
.result-cards{display:grid;grid-template-columns:repeat(3,1fr);gap:.75rem;margin-bottom:1.25rem;}
@media(max-width:640px){.result-cards{grid-template-columns:1fr;}}
.result-card{padding:1rem;border-radius:.625rem;text-align:center;}
.result-card .rc-label{font-size:.75rem;font-weight:600;text-transform:uppercase;letter-spacing:.05em;margin-bottom:.25rem;}
.result-card .rc-value{font-size:1.25rem;font-weight:700;}
.rc-principal{background:#eef2ff;}.rc-principal .rc-label{color:#6366f1;}.rc-principal .rc-value{color:#4338ca;}
.rc-interest{background:#fef3c7;}.rc-interest .rc-label{color:#d97706;}.rc-interest .rc-value{color:#b45309;}
.rc-total{background:#ecfdf5;}.rc-total .rc-label{color:#059669;}.rc-total .rc-value{color:#047857;}
/* Charts */
.chart-row{display:grid;grid-template-columns:1fr 1fr;gap:1rem;margin-top:1rem;}
@media(max-width:640px){.chart-row{grid-template-columns:1fr;}}
.chart-box{position:relative;height:260px;background:var(--card);border-radius:.625rem;padding:.75rem;border:1px solid var(--border);}
.chart-box canvas{width:100%!important;height:100%!important;}
/* Amortization */
.amort-controls{display:flex;gap:.75rem;align-items:center;margin-bottom:1rem;flex-wrap:wrap;}
.amort-controls button{padding:.5rem 1rem;border-radius:.5rem;font-size:.8125rem;font-weight:600;cursor:pointer;border:2px solid var(--border);background:var(--card);color:var(--text-muted);transition:all .2s;}
.amort-controls button.active{background:var(--primary);color:#fff;border-color:var(--primary);}
.amort-table{width:100%;border-collapse:separate;border-spacing:0;font-size:.8125rem;}
.amort-table thead{position:sticky;top:0;z-index:2;}
.amort-table th{background:var(--primary);color:#fff;padding:.625rem .75rem;text-align:right;font-weight:600;}
.amort-table th:first-child{text-align:center;border-radius:.5rem 0 0 0;}
.amort-table th:last-child{border-radius:0 .5rem 0 0;}
.amort-table td{padding:.5rem .75rem;text-align:right;border-bottom:1px solid var(--border);}
.amort-table td:first-child{text-align:center;font-weight:600;}
.amort-table tbody tr:hover{background:#f1f5f9;}
.amort-table tbody tr.year-row{background:#eef2ff;font-weight:700;cursor:pointer;}
.amort-table tbody tr.year-row:hover{background:#e0e7ff;}
.amort-table tbody tr.year-row td:first-child::before{content:'▶ ';font-size:.625rem;vertical-align:middle;}
.amort-table tbody tr.year-row.expanded td:first-child::before{content:'▼ ';}
.amort-table tbody tr.month-row{font-size:.75rem;color:var(--text-muted);}
.amort-table tbody tr.month-row.hidden{display:none;}
.amort-scroll{max-height:500px;overflow-y:auto;border:1px solid var(--border);border-radius:.625rem;}
/* Compare */
.compare-grid{display:grid;grid-template-columns:1fr 1fr;gap:1.5rem;}
@media(max-width:768px){.compare-grid{grid-template-columns:1fr;}}
.compare-card{border:2px solid var(--border);border-radius:.75rem;padding:1.25rem;}
.compare-card h3{font-size:1rem;font-weight:700;margin-bottom:1rem;display:flex;align-items:center;gap:.5rem;}
.compare-badge{display:inline-block;padding:.125rem .5rem;border-radius:1rem;font-size:.6875rem;font-weight:700;}
.badge-a{background:#dbeafe;color:#1d4ed8;}.badge-b{background:#fce7f3;color:#be185d;}
.compare-diff{margin-top:1.5rem;}
.diff-row{display:flex;justify-content:space-between;padding:.625rem 0;border-bottom:1px solid var(--border);font-size:.875rem;}
.diff-row:last-child{border-bottom:none;}
.diff-label{color:var(--text-muted);font-weight:500;}
.diff-val{font-weight:700;}
.diff-val.positive{color:#059669;}.diff-val.negative{color:#ef4444;}
/* Prepay */
.prepay-result{margin-top:1.25rem;padding:1rem;border-radius:.625rem;background:#ecfdf5;border:1px solid #a7f3d0;}
.prepay-row{display:flex;justify-content:space-between;padding:.5rem 0;font-size:.875rem;}
.prepay-row .pr-label{color:#065f46;font-weight:500;}
.prepay-row .pr-value{color:#047857;font-weight:700;}
/* Share */
.share-bar{display:flex;gap:.5rem;margin-top:1rem;flex-wrap:wrap;}
.share-btn{display:inline-flex;align-items:center;gap:.375rem;padding:.5rem 1rem;border-radius:.5rem;font-size:.8125rem;font-weight:600;cursor:pointer;border:none;transition:all .2s;}
.share-btn:hover{opacity:.9;transform:translateY(-1px);}
.share-copy{background:#f1f5f9;color:var(--text);}
.share-wa{background:#25d366;color:#fff;}
.share-tw{background:#1da1f2;color:#fff;}
/* FAQ */
.faq-item{border-bottom:1px solid var(--border);padding:1rem 0;}
.faq-q{font-weight:700;font-size:.9375rem;cursor:pointer;display:flex;justify-content:space-between;align-items:center;}
.faq-q::after{content:'+';font-size:1.25rem;font-weight:400;color:var(--text-muted);transition:transform .2s;}
.faq-item.open .faq-q::after{content:'−';}
.faq-a{max-height:0;overflow:hidden;transition:max-height .3s ease;color:var(--text-muted);font-size:.875rem;line-height:1.6;}
.faq-item.open .faq-a{max-height:500px;padding-top:.75rem;}
/* Utility */
.sr-only{position:absolute;width:1px;height:1px;padding:0;margin:-1px;overflow:hidden;clip:rect(0,0,0,0);border:0;}
.inp-sm{width:100%;padding:.5rem .75rem;border:2px solid var(--border);border-radius:.5rem;font-size:.875rem;font-weight:600;outline:none;transition:border-color .2s;}
.inp-sm:focus{border-color:var(--primary);}
</style>

<body>
<div class="emi-wrap">

<!-- Hero -->
<div class="emi-hero">
    <h1><i class="fas fa-calculator" style="color:var(--primary);margin-right:.5rem;"></i>EMI Calculator</h1>
    <p>Calculate your Equated Monthly Installment instantly for home loans, car loans, personal loans &amp; education loans.</p>
</div>

<!-- Tabs -->
<div class="emi-tabs" role="tablist">
    <button class="emi-tab active" data-tab="calculator" role="tab" aria-selected="true"><i class="fas fa-calculator"></i>&nbsp;Calculator</button>
    <button class="emi-tab" data-tab="amortization" role="tab" aria-selected="false"><i class="fas fa-table"></i>&nbsp;Amortization</button>
    <button class="emi-tab" data-tab="compare" role="tab" aria-selected="false"><i class="fas fa-balance-scale"></i>&nbsp;Compare Loans</button>
    <button class="emi-tab" data-tab="prepayment" role="tab" aria-selected="false"><i class="fas fa-hand-holding-usd"></i>&nbsp;Prepayment</button>
</div>

<!-- ===================== TAB 1: CALCULATOR ===================== -->
<div class="tab-panel active" id="panel-calculator">
<div class="emi-grid emi-grid-2">

    <!-- Left: Inputs -->
    <div class="emi-card">
        <div class="slider-group">
            <label>Loan Amount <span id="lbl-principal">₹5,00,000</span></label>
            <div class="slider-row">
                <input type="range" id="principal" min="10000" max="100000000" step="10000" value="500000" aria-label="Loan Amount">
                <input type="number" id="principal-input" class="num-input" value="500000" min="10000" max="100000000" step="10000" aria-label="Loan Amount Input">
            </div>
            <div class="slider-bounds"><span>₹10,000</span><span>₹10,00,00,000</span></div>
        </div>

        <div class="slider-group">
            <label>Interest Rate (p.a.) <span id="lbl-rate">10%</span></label>
            <div class="slider-row">
                <input type="range" id="rate" min="1" max="20" step="0.1" value="10" aria-label="Interest Rate">
                <input type="number" id="rate-input" class="num-input" value="10" min="1" max="20" step="0.1" aria-label="Interest Rate Input">
            </div>
            <div class="slider-bounds"><span>1%</span><span>20%</span></div>
        </div>

        <div class="slider-group">
            <label>Loan Tenure <span id="lbl-tenure">5 Years</span></label>
            <div class="slider-row">
                <input type="range" id="tenure" min="1" max="30" step="1" value="5" aria-label="Loan Tenure">
                <input type="number" id="tenure-input" class="num-input" value="5" min="1" max="360" step="1" aria-label="Loan Tenure Input">
                <div class="tenure-toggle">
                    <button type="button" class="active" data-unit="years">Yr</button>
                    <button type="button" data-unit="months">Mo</button>
                </div>
            </div>
            <div class="slider-bounds"><span id="tenure-min">1 Yr</span><span id="tenure-max">30 Yrs</span></div>
        </div>
    </div>

    <!-- Right: Results -->
    <div class="emi-card" id="results-panel">
        <div class="emi-result-hero">
            <div class="emi-label">Monthly EMI</div>
            <div class="emi-value" id="res-emi">₹0</div>
        </div>
        <div class="result-cards">
            <div class="result-card rc-principal">
                <div class="rc-label">Loan Amount</div>
                <div class="rc-value" id="res-principal">₹0</div>
            </div>
            <div class="result-card rc-interest">
                <div class="rc-label">Total Interest</div>
                <div class="rc-value" id="res-interest">₹0</div>
            </div>
            <div class="result-card rc-total">
                <div class="rc-label">Total Payment</div>
                <div class="rc-value" id="res-total">₹0</div>
            </div>
        </div>
        <div class="chart-row">
            <div class="chart-box"><canvas id="pieChart"></canvas></div>
            <div class="chart-box"><canvas id="lineChart"></canvas></div>
        </div>
        <!-- Share -->
        <div class="share-bar">
            <button class="share-btn share-copy" id="btn-copy" title="Copy to clipboard"><i class="fas fa-copy"></i> Copy</button>
            <a class="share-btn share-wa" id="btn-wa" href="#" target="_blank" rel="noopener noreferrer" title="Share on WhatsApp"><i class="fab fa-whatsapp"></i> WhatsApp</a>
            <a class="share-btn share-tw" id="btn-tw" href="#" target="_blank" rel="noopener noreferrer" title="Share on Twitter"><i class="fab fa-twitter"></i> Tweet</a>
        </div>
    </div>

</div>
</div>

<!-- ===================== TAB 2: AMORTIZATION ===================== -->
<div class="tab-panel" id="panel-amortization">
<div class="emi-card">
    <h2 style="font-size:1.25rem;font-weight:700;margin-bottom:.25rem;"><i class="fas fa-table" style="color:var(--primary);"></i> Amortization Schedule</h2>
    <p style="color:var(--text-muted);font-size:.875rem;margin-bottom:1rem;">Monthly breakdown of your loan repayment</p>
    <div class="amort-controls">
        <button class="active" data-amort="yearly">Yearly Summary</button>
        <button data-amort="monthly">Monthly Details</button>
    </div>
    <div class="amort-scroll" id="amort-container">
        <table class="amort-table">
            <thead>
                <tr><th>Period</th><th>EMI</th><th>Principal</th><th>Interest</th><th>Balance</th></tr>
            </thead>
            <tbody id="amort-body"></tbody>
        </table>
    </div>
</div>
</div>

<!-- ===================== TAB 3: COMPARE ===================== -->
<div class="tab-panel" id="panel-compare">
<div class="compare-grid">
    <!-- Loan A -->
    <div class="compare-card">
        <h3><span class="compare-badge badge-a">A</span> Loan A</h3>
        <div class="slider-group">
            <label style="font-size:.8125rem;">Loan Amount</label>
            <input type="number" id="cmp-a-principal" class="inp-sm" value="500000" min="10000" step="10000">
        </div>
        <div class="slider-group">
            <label style="font-size:.8125rem;">Interest Rate (%)</label>
            <input type="number" id="cmp-a-rate" class="inp-sm" value="10" min="1" max="20" step="0.1">
        </div>
        <div class="slider-group">
            <label style="font-size:.8125rem;">Tenure (Years)</label>
            <input type="number" id="cmp-a-tenure" class="inp-sm" value="5" min="1" max="30" step="1">
        </div>
        <div id="cmp-a-result" style="margin-top:.75rem;"></div>
    </div>
    <!-- Loan B -->
    <div class="compare-card">
        <h3><span class="compare-badge badge-b">B</span> Loan B</h3>
        <div class="slider-group">
            <label style="font-size:.8125rem;">Loan Amount</label>
            <input type="number" id="cmp-b-principal" class="inp-sm" value="500000" min="10000" step="10000">
        </div>
        <div class="slider-group">
            <label style="font-size:.8125rem;">Interest Rate (%)</label>
            <input type="number" id="cmp-b-rate" class="inp-sm" value="12" min="1" max="20" step="0.1">
        </div>
        <div class="slider-group">
            <label style="font-size:.8125rem;">Tenure (Years)</label>
            <input type="number" id="cmp-b-tenure" class="inp-sm" value="5" min="1" max="30" step="1">
        </div>
        <div id="cmp-b-result" style="margin-top:.75rem;"></div>
    </div>
</div>
<div class="emi-card compare-diff" id="compare-diff"></div>
</div>

<!-- ===================== TAB 4: PREPAYMENT ===================== -->
<div class="tab-panel" id="panel-prepayment">
<div class="emi-card">
    <h2 style="font-size:1.25rem;font-weight:700;margin-bottom:.25rem;"><i class="fas fa-hand-holding-usd" style="color:var(--primary);"></i> Prepayment Calculator</h2>
    <p style="color:var(--text-muted);font-size:.875rem;margin-bottom:1.25rem;">See how extra payments can save you interest and shorten your loan.</p>
    <div class="emi-grid emi-grid-2">
        <div>
            <div class="slider-group">
                <label style="font-size:.8125rem;">Loan Amount (₹)</label>
                <input type="number" id="pre-principal" class="inp-sm" value="500000" min="10000" step="10000">
            </div>
            <div class="slider-group">
                <label style="font-size:.8125rem;">Interest Rate (%)</label>
                <input type="number" id="pre-rate" class="inp-sm" value="10" min="1" max="20" step="0.1">
            </div>
            <div class="slider-group">
                <label style="font-size:.8125rem;">Tenure (Years)</label>
                <input type="number" id="pre-tenure" class="inp-sm" value="5" min="1" max="30" step="1">
            </div>
        </div>
        <div>
            <div class="slider-group">
                <label style="font-size:.8125rem;">Extra Monthly Payment (₹)</label>
                <input type="number" id="pre-extra-monthly" class="inp-sm" value="0" min="0" step="500">
            </div>
            <div class="slider-group">
                <label style="font-size:.8125rem;">One-Time Prepayment (₹)</label>
                <input type="number" id="pre-onetime" class="inp-sm" value="0" min="0" step="1000">
            </div>
            <div class="slider-group">
                <label style="font-size:.8125rem;">Prepayment After Month #</label>
                <input type="number" id="pre-onetime-month" class="inp-sm" value="12" min="1" step="1">
            </div>
        </div>
    </div>
    <div id="prepay-results"></div>
</div>
</div>

<!-- ===================== ABOUT / FAQ ===================== -->
<div class="emi-card" style="margin-top:1rem;">
    <h2 style="font-size:1.25rem;font-weight:700;margin-bottom:.75rem;"><i class="fas fa-info-circle" style="color:var(--primary);"></i> About EMI Calculator</h2>
    <p style="color:var(--text-muted);font-size:.875rem;line-height:1.7;">
        An <strong>Equated Monthly Installment (EMI)</strong> is a fixed payment made by a borrower to a lender on a specified date each month. It comprises both principal repayment and interest, ensuring the loan is fully repaid over the agreed tenure. Our calculator uses the standard formula: <strong>EMI = P × r × (1+r)<sup>n</sup> / ((1+r)<sup>n</sup> − 1)</strong>, where P is the loan amount, r is the monthly interest rate, and n is the number of months.
    </p>
    <div style="margin-top:1.25rem;">
        <div class="faq-item open">
            <div class="faq-q" onclick="this.parentElement.classList.toggle('open')">What is EMI?</div>
            <div class="faq-a">EMI stands for Equated Monthly Installment. It is the amount payable every month to the bank or financial institution until the loan is paid off in full. It consists of the interest on the loan as well as part of the principal amount to be repaid.</div>
        </div>
        <div class="faq-item">
            <div class="faq-q" onclick="this.parentElement.classList.toggle('open')">How is EMI calculated?</div>
            <div class="faq-a">EMI is calculated using the formula: EMI = P × r × (1+r)^n / ((1+r)^n − 1). Here, P = principal loan amount, r = monthly interest rate (annual rate / 12 / 100), and n = loan tenure in months. The result is a fixed monthly amount that covers both interest and principal repayment.</div>
        </div>
        <div class="faq-item">
            <div class="faq-q" onclick="this.parentElement.classList.toggle('open')">What factors affect my EMI?</div>
            <div class="faq-a">Three main factors affect your EMI: (1) Loan Amount — higher principal means higher EMI; (2) Interest Rate — higher rates increase EMI; (3) Tenure — longer tenure reduces EMI but increases total interest paid.</div>
        </div>
        <div class="faq-item">
            <div class="faq-q" onclick="this.parentElement.classList.toggle('open')">Does prepayment reduce my loan tenure or EMI?</div>
            <div class="faq-a">Prepayment reduces the outstanding principal, which can either shorten your loan tenure or reduce your EMI amount depending on the terms of your loan agreement. Most lenders allow you to keep the same EMI and reduce tenure, which saves more interest in the long run.</div>
        </div>
        <div class="faq-item">
            <div class="faq-q" onclick="this.parentElement.classList.toggle('open')">Can I use this calculator for different loan types?</div>
            <div class="faq-a">Yes. This EMI calculator works for all types of loans — home loans, personal loans, car loans, education loans, business loans, and any other loan with a fixed interest rate and equal monthly installments.</div>
        </div>
        <div class="faq-item">
            <div class="faq-q" onclick="this.parentElement.classList.toggle('open')">What is an amortization schedule?</div>
            <div class="faq-a">An amortization schedule is a complete table of periodic loan payments showing the amount of principal and interest that comprise each payment until the loan is fully paid off. In the early months, a larger portion of each payment goes toward interest. Over time, more of each payment goes toward reducing the principal.</div>
        </div>
    </div>
</div>

</div><!-- /emi-wrap -->

<script>
(function(){
'use strict';

/* ── Utility Functions ── */
function fmt(n){
    if(n===undefined||n===null||isNaN(n))return '₹0';
    return '₹'+Math.round(n).toLocaleString('en-IN');
}
function fmtNum(n){
    if(n===undefined||n===null||isNaN(n))return '0';
    return Math.round(n).toLocaleString('en-IN');
}
function pct(n){return parseFloat(n).toFixed(1)+'%';}

function calcEMI(P,annualRate,months){
    if(P<=0||annualRate<=0||months<=0) return {emi:0,totalPayment:0,totalInterest:0};
    var r=annualRate/12/100;
    var pow=Math.pow(1+r,months);
    var emi=P*r*pow/(pow-1);
    var totalPayment=emi*months;
    return {emi:emi,totalPayment:totalPayment,totalInterest:totalPayment-P};
}

function generateAmortization(P,annualRate,months){
    var r=annualRate/12/100;
    var result=calcEMI(P,annualRate,months);
    var emi=result.emi;
    var balance=P;
    var schedule=[];
    for(var i=1;i<=months;i++){
        var intPart=balance*r;
        var prinPart=emi-intPart;
        balance-=prinPart;
        if(balance<0)balance=0;
        schedule.push({month:i,emi:emi,principal:prinPart,interest:intPart,balance:balance});
    }
    return schedule;
}

/* ── Slider gradient helper ── */
function updateSliderBg(slider){
    var min=parseFloat(slider.min),max=parseFloat(slider.max),val=parseFloat(slider.value);
    var pctVal=((val-min)/(max-min))*100;
    slider.style.background='linear-gradient(to right,var(--primary) '+pctVal+'%,#e2e8f0 '+pctVal+'%)';
}

/* ── Chart instances ── */
var pieChart=null,lineChart=null;

/* ── DOM refs ── */
var $=function(id){return document.getElementById(id);};

/* ── Tab switching ── */
document.querySelectorAll('.emi-tab').forEach(function(tab){
    tab.addEventListener('click',function(){
        document.querySelectorAll('.emi-tab').forEach(function(t){t.classList.remove('active');t.setAttribute('aria-selected','false');});
        document.querySelectorAll('.tab-panel').forEach(function(p){p.classList.remove('active');});
        tab.classList.add('active');
        tab.setAttribute('aria-selected','true');
        $('panel-'+tab.dataset.tab).classList.add('active');
    });
});

/* ── Tenure unit toggle ── */
var tenureUnit='years';
document.querySelectorAll('.tenure-toggle button').forEach(function(btn){
    btn.addEventListener('click',function(){
        document.querySelectorAll('.tenure-toggle button').forEach(function(b){b.classList.remove('active');});
        btn.classList.add('active');
        tenureUnit=btn.dataset.unit;
        if(tenureUnit==='years'){
            $('tenure').min=1;$('tenure').max=30;$('tenure').step=1;
            $('tenure-input').min=1;$('tenure-input').max=30;$('tenure-input').step=1;
            $('tenure-min').textContent='1 Yr';$('tenure-max').textContent='30 Yrs';
            var mo=parseInt($('tenure-input').value)||12;
            var yr=Math.max(1,Math.round(mo/12));
            $('tenure').value=yr;$('tenure-input').value=yr;
        } else {
            $('tenure').min=1;$('tenure').max=360;$('tenure').step=1;
            $('tenure-input').min=1;$('tenure-input').max=360;$('tenure-input').step=1;
            $('tenure-min').textContent='1 Mo';$('tenure-max').textContent='360 Mo';
            var yr2=parseInt($('tenure-input').value)||5;
            var mo2=yr2*12;
            $('tenure').value=mo2;$('tenure-input').value=mo2;
        }
        updateSliderBg($('tenure'));
        calculate();
    });
});

/* ── Sync sliders ↔ inputs ── */
function syncPair(sliderId,inputId,cb){
    var slider=$(sliderId),inp=$(inputId);
    slider.addEventListener('input',function(){inp.value=slider.value;updateSliderBg(slider);cb();});
    inp.addEventListener('input',function(){
        var v=parseFloat(inp.value);
        if(!isNaN(v)){
            v=Math.max(parseFloat(slider.min),Math.min(parseFloat(slider.max),v));
            slider.value=v;updateSliderBg(slider);
        }
        cb();
    });
}
syncPair('principal','principal-input',calculate);
syncPair('rate','rate-input',calculate);
syncPair('tenure','tenure-input',calculate);

/* ── Main calculation ── */
function calculate(){
    var P=parseFloat($('principal-input').value)||0;
    var rate=parseFloat($('rate-input').value)||0;
    var tenure=parseFloat($('tenure-input').value)||0;
    var months=tenureUnit==='years'?tenure*12:tenure;

    // Clamp
    P=Math.max(10000,Math.min(100000000,P));
    rate=Math.max(1,Math.min(20,rate));
    months=Math.max(1,Math.min(360,months));

    // Labels
    $('lbl-principal').textContent=fmt(P);
    $('lbl-rate').textContent=pct(rate);
    $('lbl-tenure').textContent=tenureUnit==='years'?tenure+' Year'+(tenure>1?'s':''):months+' Month'+(months>1?'s':'');

    var res=calcEMI(P,rate,months);

    // Results
    $('res-emi').textContent=fmt(res.emi);
    $('res-principal').textContent=fmt(P);
    $('res-interest').textContent=fmt(res.totalInterest);
    $('res-total').textContent=fmt(res.totalPayment);

    // Charts
    renderPieChart(P,res.totalInterest);
    renderLineChart(P,rate,months);

    // Amortization
    renderAmortization(P,rate,months);

    // Share text update
    updateShareLinks(P,rate,tenure,tenureUnit,res);
}

/* ── Pie Chart ── */
function renderPieChart(principal,interest){
    var ctx=$('pieChart');
    if(pieChart){pieChart.destroy();}
    pieChart=new Chart(ctx,{
        type:'doughnut',
        data:{
            labels:['Principal','Interest'],
            datasets:[{data:[Math.round(principal),Math.round(interest)],backgroundColor:['#4f46e5','#fbbf24'],borderWidth:0,hoverOffset:6}]
        },
        options:{
            responsive:true,maintainAspectRatio:false,
            cutout:'68%',
            plugins:{
                legend:{position:'bottom',labels:{padding:12,usePointStyle:true,pointStyle:'circle',font:{size:12,weight:'600'}}},
                tooltip:{callbacks:{label:function(c){return c.label+': '+fmt(c.raw);}}}
            }
        }
    });
}

/* ── Line Chart ── */
function renderLineChart(P,rate,months){
    var ctx=$('lineChart');
    if(lineChart){lineChart.destroy();}
    var schedule=generateAmortization(P,rate,months);
    var labels=[],data=[];
    // Show every month if <60, else show yearly
    if(months<=60){
        for(var i=0;i<schedule.length;i++){labels.push('M'+(i+1));data.push(Math.round(schedule[i].balance));}
    } else {
        for(var j=0;j<schedule.length;j++){
            if((j+1)%12===0||j===schedule.length-1){labels.push('Y'+Math.ceil((j+1)/12));data.push(Math.round(schedule[j].balance));}
        }
    }
    lineChart=new Chart(ctx,{
        type:'line',
        data:{
            labels:labels,
            datasets:[{label:'Balance',data:data,borderColor:'#4f46e5',backgroundColor:'rgba(79,70,229,0.08)',fill:true,tension:0.3,pointRadius:months<=60?2:3,pointBackgroundColor:'#4f46e5',borderWidth:2}]
        },
        options:{
            responsive:true,maintainAspectRatio:false,
            scales:{
                y:{ticks:{callback:function(v){return '₹'+Math.round(v/1000)+'K';},font:{size:10}},grid:{color:'#f1f5f9'}},
                x:{ticks:{font:{size:9},maxRotation:0},grid:{display:false}}
            },
            plugins:{legend:{display:false},tooltip:{callbacks:{label:function(c){return 'Balance: '+fmt(c.raw);}}}}
        }
    });
}

/* ── Amortization Schedule ── */
var amortMode='yearly';
document.querySelectorAll('.amort-controls button').forEach(function(btn){
    btn.addEventListener('click',function(){
        document.querySelectorAll('.amort-controls button').forEach(function(b){b.classList.remove('active');});
        btn.classList.add('active');
        amortMode=btn.dataset.amort;
        var P=parseFloat($('principal-input').value)||0;
        var rate=parseFloat($('rate-input').value)||0;
        var tenure=parseFloat($('tenure-input').value)||0;
        var months=tenureUnit==='years'?tenure*12:tenure;
        renderAmortization(P,rate,months);
    });
});

function renderAmortization(P,rate,months){
    var schedule=generateAmortization(P,rate,months);
    var tbody=$('amort-body');
    var html='';

    if(amortMode==='monthly'){
        for(var i=0;i<schedule.length;i++){
            var s=schedule[i];
            html+='<tr><td>'+s.month+'</td><td>'+fmt(s.emi)+'</td><td>'+fmt(s.principal)+'</td><td>'+fmt(s.interest)+'</td><td>'+fmt(s.balance)+'</td></tr>';
        }
    } else {
        // Yearly summary with expandable months
        var years=Math.ceil(months/12);
        for(var y=1;y<=years;y++){
            var startIdx=(y-1)*12;
            var endIdx=Math.min(y*12,months);
            var yEmi=0,yPrin=0,yInt=0,yBal=0;
            for(var m=startIdx;m<endIdx;m++){
                yEmi+=schedule[m].emi;yPrin+=schedule[m].principal;yInt+=schedule[m].interest;
                yBal=schedule[m].balance;
            }
            html+='<tr class="year-row" data-year="'+y+'" onclick="toggleYear(this)"><td>Year '+y+'</td><td>'+fmt(yEmi)+'</td><td>'+fmt(yPrin)+'</td><td>'+fmt(yInt)+'</td><td>'+fmt(yBal)+'</td></tr>';
            for(var m2=startIdx;m2<endIdx;m2++){
                var s2=schedule[m2];
                html+='<tr class="month-row hidden" data-parent="'+y+'"><td>'+s2.month+'</td><td>'+fmt(s2.emi)+'</td><td>'+fmt(s2.principal)+'</td><td>'+fmt(s2.interest)+'</td><td>'+fmt(s2.balance)+'</td></tr>';
            }
        }
    }
    tbody.innerHTML=html;
}

window.toggleYear=function(row){
    var year=row.dataset.year;
    row.classList.toggle('expanded');
    document.querySelectorAll('.month-row[data-parent="'+year+'"]').forEach(function(r){
        r.classList.toggle('hidden');
    });
};

/* ── Loan Comparison ── */
function calculateCompare(){
    var pA=parseFloat($('cmp-a-principal').value)||0;
    var rA=parseFloat($('cmp-a-rate').value)||0;
    var tA=(parseFloat($('cmp-a-tenure').value)||0)*12;
    var pB=parseFloat($('cmp-b-principal').value)||0;
    var rB=parseFloat($('cmp-b-rate').value)||0;
    var tB=(parseFloat($('cmp-b-tenure').value)||0)*12;

    var resA=calcEMI(pA,rA,tA);
    var resB=calcEMI(pB,rB,tB);

    $('cmp-a-result').innerHTML='<div style="padding:.75rem;background:#eef2ff;border-radius:.5rem;"><div style="font-size:.75rem;color:#6366f1;font-weight:600;">Monthly EMI</div><div style="font-size:1.25rem;font-weight:800;color:#4338ca;">'+fmt(resA.emi)+'</div><div style="font-size:.75rem;color:var(--text-muted);margin-top:.25rem;">Interest: '+fmt(resA.totalInterest)+' | Total: '+fmt(resA.totalPayment)+'</div></div>';
    $('cmp-b-result').innerHTML='<div style="padding:.75rem;background:#fce7f3;border-radius:.5rem;"><div style="font-size:.75rem;color:#be185d;font-weight:600;">Monthly EMI</div><div style="font-size:1.25rem;font-weight:800;color:#9d174d;">'+fmt(resB.emi)+'</div><div style="font-size:.75rem;color:var(--text-muted);margin-top:.25rem;">Interest: '+fmt(resB.totalInterest)+' | Total: '+fmt(resB.totalPayment)+'</div></div>';

    var emiDiff=resA.emi-resB.emi;
    var intDiff=resA.totalInterest-resB.totalInterest;
    var totalDiff=resA.totalPayment-resB.totalPayment;

    function diffClass(v){return v<0?'positive':'negative';}
    function diffSign(v){return (v>0?'+':'')+fmt(v);}

    $('compare-diff').innerHTML='<h3 style="font-size:1rem;font-weight:700;margin-bottom:.75rem;"><i class="fas fa-exchange-alt" style="color:var(--primary);"></i> Difference (A vs B)</h3>'+
        '<div class="diff-row"><span class="diff-label">EMI Difference</span><span class="diff-val '+diffClass(emiDiff)+'">'+diffSign(emiDiff)+'</span></div>'+
        '<div class="diff-row"><span class="diff-label">Interest Difference</span><span class="diff-val '+diffClass(intDiff)+'">'+diffSign(intDiff)+'</span></div>'+
        '<div class="diff-row"><span class="diff-label">Total Payment Difference</span><span class="diff-val '+diffClass(totalDiff)+'">'+diffSign(totalDiff)+'</span></div>';
}
['cmp-a-principal','cmp-a-rate','cmp-a-tenure','cmp-b-principal','cmp-b-rate','cmp-b-tenure'].forEach(function(id){
    $(id).addEventListener('input',calculateCompare);
});

/* ── Prepayment Calculator ── */
function calculatePrepayment(){
    var P=parseFloat($('pre-principal').value)||0;
    var rate=parseFloat($('pre-rate').value)||0;
    var tenure=(parseFloat($('pre-tenure').value)||0)*12;
    var extraMonthly=parseFloat($('pre-extra-monthly').value)||0;
    var oneTime=parseFloat($('pre-onetime').value)||0;
    var oneTimeMonth=parseInt($('pre-onetime-month').value)||12;

    if(P<=0||rate<=0||tenure<=0){$('prepay-results').innerHTML='';return;}

    var r=rate/12/100;
    var origRes=calcEMI(P,rate,tenure);
    var emi=origRes.emi;

    // Without prepayment
    var origInterest=origRes.totalInterest;
    var origMonths=tenure;

    // With prepayment simulation
    var balance=P;
    var totalInterestNew=0;
    var month=0;
    while(balance>0.01&&month<tenure+120){
        month++;
        var intPart=balance*r;
        totalInterestNew+=intPart;
        var payment=emi+extraMonthly;

        // One-time prepayment
        if(month===oneTimeMonth&&oneTime>0){
            balance-=oneTime;
            if(balance<0)balance=0;
        }

        var prinPart=payment-intPart;
        if(prinPart>balance){prinPart=balance;payment=intPart+prinPart;}
        balance-=prinPart;
        if(balance<0)balance=0;
    }

    var interestSaved=origInterest-totalInterestNew;
    var monthsSaved=origMonths-month;

    $('prepay-results').innerHTML='<div class="prepay-result">'+
        '<div style="font-weight:700;font-size:1rem;margin-bottom:.75rem;color:#065f46;"><i class="fas fa-piggy-bank"></i> Prepayment Impact</div>'+
        '<div class="prepay-row"><span class="pr-label">Original Tenure</span><span class="pr-value">'+origMonths+' months ('+Math.round(origMonths/12*10)/10+' yrs)</span></div>'+
        '<div class="prepay-row"><span class="pr-label">New Tenure</span><span class="pr-value">'+month+' months ('+Math.round(month/12*10)/10+' yrs)</span></div>'+
        '<div class="prepay-row"><span class="pr-label">Months Saved</span><span class="pr-value" style="color:#059669;font-size:1.125rem;">'+Math.abs(monthsSaved)+' months</span></div>'+
        '<div class="prepay-row"><span class="pr-label">Original Interest</span><span class="pr-value">'+fmt(origInterest)+'</span></div>'+
        '<div class="prepay-row"><span class="pr-label">New Interest</span><span class="pr-value">'+fmt(totalInterestNew)+'</span></div>'+
        '<div class="prepay-row" style="border-top:2px solid #a7f3d0;padding-top:.75rem;"><span class="pr-label" style="font-weight:700;font-size:1rem;">Interest Saved</span><span class="pr-value" style="color:#059669;font-size:1.25rem;">'+fmt(interestSaved)+'</span></div>'+
        '</div>';
}
['pre-principal','pre-rate','pre-tenure','pre-extra-monthly','pre-onetime','pre-onetime-month'].forEach(function(id){
    $(id).addEventListener('input',calculatePrepayment);
});

/* ── Share Links ── */
function updateShareLinks(P,rate,tenure,unit,res){
    var text='Loan EMI Calculation\n\nLoan Amount: '+fmt(P)+'\nInterest Rate: '+pct(rate)+
        '\nTenure: '+tenure+' '+(unit==='years'?'Years':'Months')+
        '\n\nMonthly EMI: '+fmt(res.emi)+'\nTotal Interest: '+fmt(res.totalInterest)+
        '\nTotal Payment: '+fmt(res.totalPayment)+'\n\nCalculated at thiyagi.com/emi-calculator';
    var encoded=encodeURIComponent(text);
    $('btn-wa').href='https://wa.me/?text='+encoded;
    $('btn-tw').href='https://twitter.com/intent/tweet?text='+encodeURIComponent('Loan EMI Calculation | EMI: '+fmt(res.emi)+' | Interest: '+fmt(res.totalInterest)+' | Total: '+fmt(res.totalPayment)+' | thiyagi.com/emi-calculator');

    $('btn-copy').onclick=function(){
        if(navigator.clipboard&&navigator.clipboard.writeText){
            navigator.clipboard.writeText(text).then(function(){
                $('btn-copy').innerHTML='<i class="fas fa-check"></i> Copied!';
                setTimeout(function(){$('btn-copy').innerHTML='<i class="fas fa-copy"></i> Copy';},2000);
            });
        }
    };
}

/* ── Init ── */
['principal','rate','tenure'].forEach(function(id){updateSliderBg($(id));});
calculate();
calculateCompare();
calculatePrepayment();

})();
</script>
</body>

<?php include 'footer.php';?>
