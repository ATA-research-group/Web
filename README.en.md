<div align="center">
  <a href="https://www.epn.edu.ec/" target="_blank">
    <img src="logo-epn.png" alt="Escuela Politécnica Nacional Logo" height="80">
  </a>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <a href="https://ata-research-group.github.io/Web/" target="_blank">
    <img src="logo-oscuro.png" alt="ATA Research Group Logo" height="80">
  </a>

  # ✈️ ATA Research Group | Official Website Repository

  [![Official Website](https://img.shields.io/badge/View_Website-00539F?style=for-the-badge)](https://ata-research-group.github.io/Web/)
  [![Escuela Politécnica Nacional](https://img.shields.io/badge/Escuela_Politécnica_Nacional-00539F?style=for-the-badge)](https://www.epn.edu.ec/)
  <br>
  [![Repository Size](https://img.shields.io/github/repo-size/ata-research-group/Web?style=for-the-badge)](https://github.com/ata-research-group/Web)
  
  <br>
  
  🌐 <strong>Leer en otros idiomas / Read this in other languages:</strong>
  <br>
  <a href="README.md">🇪🇸 Español</a> | <a href="README.en.md">🇬🇧 English</a>
</div>

<br>

<div align="center">
  <h2>📖 General Description</h2>
</div>

**ATA Research Group** is a research and engineering team at the **Escuela Politécnica Nacional (EPN)**, specializing in Aeronautics and Thermofluids. 

This repository contains the source code and design of our official website. This platform was created to disseminate academic work and showcase the progress of everyone involved in the laboratory: researchers, interns, and thesis students.

<div align="center">
  <h2>🎯 Core Research Areas</h2>
  <p><i>Our work focuses on solving applied engineering challenges through five fundamental pillars:</i></p>
</div>

<br>

#### ✈️ Aerospace Systems (UAVs)
> Aerodynamic design, structural calculation, and hardware assembly for various unmanned aerial vehicle architectures. Our research encompasses the development and optimization of fixed-wing platforms, multirotor configurations, and hybrid systems, adapting propulsion and flight dynamics to the operational demands of each mission.

<div align="center">
  <img src="galeria/prototipo-1.jpg" alt="UAV Aerospace Systems Research" width="400" style="border-radius: 8px; margin-top: 15px;">
</div>


---

#### 📡 Flight Telecommunications
> Development of uninterrupted telemetry systems and extended-range communication networks, including integration with satellite links.


<div align="center">
  <img src="galeria/lab-3.png" alt="Flight Telecommunications Research" width="400" style="border-radius: 8px; margin-top: 15px;">
</div>

---

---

#### ⚙️ Embedded Systems and Instrumentation
> Design of IoT monitoring architectures (using microcontrollers) for precise data acquisition in both laboratory and field environments.

<div align="center">
  <img src="img-publicaciones/pub-2022-03.png" alt="Embedded Systems and Instrumentation Research" width="400" style="border-radius: 8px; margin-top: 15px;">
</div>

---

#### 🌍 Geospatial Data Processing
> Computational analysis and advanced topographic modeling. We manage data collected by UAVs in environmental monitoring missions (such as surveys in volcanic environments and complex ecosystem profiling), generating orthomosaics and precise simulations of physical environments.

<div align="center">
  <img src="img-publicaciones/pub-2022-01.jpg" alt="Geospatial Data Processing Research" width="400" style="border-radius: 8px; margin-top: 15px;">
</div>

---

#### 🧠 Signal Processing and Artificial Vision
> Implementation of neural network architectures and classification algorithms for advanced image and signal processing. We apply mathematical analysis and computational visual segmentation in development environments to automate the interpretation of captured data.

<div align="center">
  <img src="img-publicaciones/pub-2024-04.png" alt="Signal Processing and Artificial Vision Research" width="400" style="border-radius: 8px; margin-top: 15px;">
</div>

<br>

<div align="center">
  <img src="https://img.shields.io/badge/Current_Status-Active_maintenance_and_continuous_deployment-2ea44f?style=for-the-badge&logo=github" alt="Project Status">
</div>

<br>

---

<div align="center">
  <h2>🚁 UAV Research Platforms</h2>
</div>

<div align="center">
  <img src="img-inicio/banner-ata.jpg" alt="ATA Research Group VTOL Platform" width="800" style="border-radius: 10px; border: 1px solid #ddd; box-shadow: 0px 4px 10px rgba(0,0,0,0.1);">
</div>
<br>

---

<div align="center">
  <h2>🗂️ Site Architecture and Navigation</h2>
</div>

The website has a simple and static structure. It features a navigation bar for general sections, which include: team, gallery, contact, and direct links to specific pages to document each line of research.

<div align="center">
  <h2>📍 Main Navigation</h2>
</div>

| Route | Section | Purpose |
| :--- | :--- | :--- |
| `/index` | **Home** | Main landing page, impact summary, and metrics. |
| `/nosotros` | **Our Team** | Profiles of the multidisciplinary team. |
| `/proyectos` | **Projects Hub** | Central directory of research lines. |
| `/publicaciones` | **Publications** | Repository of articles published in indexed journals. |
| `/galeria` | **Visual Log** | Photographic archive of the laboratory and field missions. |
| `/contacto` | **Contact** | Institutional communication channels and location. |

<div align="center">
  <h2>🔬 Research Sub-routes</h2>
</div>

The `/proyectos` route acts as a hub linking to over 15 individual technical documentation pages. Highlights include:

* **VLIR Series:** `/proyecto-vlir-team-25`, `/proyecto-vlir-si-25`, `/proyecto-vlir-si-23`
* **Projects:** `/pt-24-01` (Autonomous Flight), `/pt-24-04` (UAV Mesh), `/pt-24-07` (Composite Materials).
* **PIM/PIGR Series:** `/pim-24-01`, `/pigr-24-01`, `/pim-21-01`.
---

<div align="center">
  <h2>📂 Repository Directory Structure</h2>
</div>

```text
📦 Project Root
├── 📁 css/                 # Modular style sheets (UI/UX)
├── 📁 img-inicio/          # Visual assets for the landing page and banners
├── 📁 img_nosotros/        # Photographs of the multidisciplinary team
├── 📁 img-publicaciones/   # Scientific article covers and charts
├── 🌐 index.html           # Web application entry point
├── 🌐 proyectos.html       # Central directory of research lines
├── 📄 proyecto-*.html      # Technical research documents (15+ files)
├── 🌐 nosotros.html        # Profiles of researchers and thesis students
└── ⚙️ idioma.js            # Interface internationalization logic