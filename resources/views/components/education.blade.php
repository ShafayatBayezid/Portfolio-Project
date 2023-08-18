<div class="container px-5 my-5">
  <div class="row gx-5 justify-content-center">
    <div class="col-lg-11 col-xl-9 col-xxl-8">
      <section>
        <h2 class="text-secondary fw-bolder mb-4">Education</h2>
        <!-- Education Card 1-->

        <div id="education-list">

        </div>


      </section>
    </div>
  </div>
</div>

<script>
getEducationData();
async function getEducationData() {
  let URL = "/educationsData";

  try {

    // Before rendering, Loader Show Content Hide
    document.getElementById('loading-div').classList.remove('d-none');
    document.getElementById('content-div').classList.add('d-none');

    let response = await axios.get(URL);

    // After rendering, Loader Hide Content Show
    document.getElementById('loading-div').classList.add('d-none');
    document.getElementById('content-div').classList.remove('d-none');

    response.data.forEach((item) => {

      document.getElementById('education-list').innerHTML += (`
        <div class="card shadow border-0 rounded-4 mb-5">
            <div class="card-body p-5">
                <div class="row align-items-center gx-5">
                    <div class="col text-center text-lg-start mb-4 mb-lg-0">
                        <div class="bg-light p-4 rounded-4">
                            <div class="text-primary fw-bolder mb-2">${item['durations']}</div>
                            <div class="small fw-bolder">${item['institutions_name']}</div>
                            <div class="small text-muted">${item['major']}</div>
                        </div>
                    </div>
                    <div class="col-lg-8"><div>${item['details']}</div></div>
                </div>
            </div>
        </div>
      `)

    })
  } catch (error) {
    alert(error);
  }
}
</script>