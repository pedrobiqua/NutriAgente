<div class="d-flex align-items-center justify-content-center m-3">
  <h1 style="color: #00bf63;" class="fonteIBM">Agendar</h1>
</div>

<div class="d-flex align-items-center justify-content-center m-3">
  <div class="container text-center float-center justify-content-center">
    <div class="d-flex justify-content-center align-items-center">
      <div class="dropdown-menu d-block position-static p-2 rounded-3" style="width: 340px;">
        
        <strong class="cal-month-name verdeEscuro fonteIBM">Junho</strong>
        
        <div class="d-grid gap-1 justify-content-center">
          <div class="cal">
            <div class="cal-month">
              <button class="btn cal-btn" type="button">
                <svg class="bi" width="16" height="16">
                  <use xlink:href="#arrow-left-short"></use>
                </svg>
              </button>
              <select class="form-select cal-month-name d-none">
                <option value="January">Janeiro</option>
                <option value="February">Fevereiro</option>
                <option value="March">Março</option>
                <option value="April">Abril</option>
                <option value="May">Maio</option>
                <option selected="" value="June">Junho</option>
                <option value="July">Julho</option>
                <option value="August">Agosto</option>
                <option value="September">Setembro</option>
                <option value="October">Outubro</option>
                <option value="November">Novembro</option>
                <option value="December">Dezembro</option>
              </select>
              <button class="btn cal-btn" type="button">
                <svg class="bi" width="16" height="16">
                  <use xlink:href="#arrow-right-short"></use>
                </svg>
              </button>
            </div>

            <div class="cal-days justify-content-center">
              <button id="before-date-30" class="btn cal-btn" disabled="" type="button">30</button>
              <button id="before-date-31" class="btn cal-btn" disabled="" type="button">31</button>

              <button id="date-1" class="btn cal-btn" type="button">1</button>
              <button id="date-2" class="btn cal-btn" type="button">2</button>
              <button id="date-3" class="btn cal-btn" type="button">3</button>
              <button id="date-4" class="btn cal-btn" type="button">4</button>
              <button id="date-5" class="btn cal-btn" type="button">5</button>
              <button id="date-6" class="btn cal-btn" type="button">6</button>
              <button id="date-7" class="btn cal-btn" type="button">7</button>

              <button id="date-8" class="btn cal-btn" type="button">8</button>
              <button id="date-9" class="btn cal-btn" type="button">9</button>
              <button id="date-10" class="btn cal-btn" type="button">10</button>
              <button id="date-11" class="btn cal-btn" type="button">11</button>
              <button id="date-12" class="btn cal-btn" type="button">12</button>
              <button id="date-13" class="btn cal-btn" type="button">13</button>
              <button id="date-14" class="btn cal-btn" type="button">14</button>

              <button id="date-15" class="btn cal-btn" type="button">15</button>
              <button id="date-16" class="btn cal-btn" type="button">16</button>
              <button id="date-17" class="btn cal-btn" type="button">17</button>
              <button id="date-18" class="btn cal-btn" type="button">18</button>
              <button id="date-19" class="btn cal-btn" type="button">19</button>
              <button id="date-20" class="btn cal-btn" type="button">20</button>
              <button id="date-21" class="btn cal-btn" type="button">21</button>

              <button id="date-22" class="btn cal-btn" type="button">22</button>
              <button id="date-23" class="btn cal-btn" type="button">23</button>
              <button id="date-24" class="btn cal-btn" type="button">24</button>
              <button id="date-25" class="btn cal-btn" type="button">25</button>
              <button id="date-26" class="btn cal-btn" type="button">26</button>
              <button id="date-27" class="btn cal-btn" type="button">27</button>
              <button id="date-28" class="btn cal-btn" type="button">28</button>

              <button id="date-29" class="btn cal-btn" type="button">29</button>
              <button id="date-30" class="btn cal-btn" type="button">30</button>
              <button id="date-31" class="btn cal-btn" type="button">31</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<script>
  var loginButton = document.getElementById("login_button");
  loginButton.textContent = "Sair"
</script>