export default function About() {
  return (
    <section id="about" className="page-content about-section">
      <div className="about-main">
        <h2>Who We Are</h2>
        <p>
          We specialize in crafting high-performance rifles, pistols, shotguns, and tactical
          combat equipment — built with dedication and precision engineering.
        </p>
        <p>
          Ghazi Arms Industries combines decades of defence manufacturing experience with
          modern design, strict quality control, and responsive support for military, law enforcement,
          and tactical professionals.
        </p>
        <p>
          Our focus is on precision, reliability, and innovation across every product line —
          from custom small arms to complete tactical systems.
        </p>

        <h3 style={{ marginTop: '30px', color: '#f1c40f' }}>Meet Our Founder & Owner</h3>
        <p>
          <strong>Sami Ullah</strong> is the visionary founder and owner of Ghazi Arms Industries. 
          With extensive expertise in firearms manufacturing, defence engineering, and strategic business development, 
          Sami Ullah has transformed Ghazi Arms into a leading manufacturer of premium tactical equipment and small arms.
        </p>
        <p>
          Under his leadership, the company has earned a reputation for uncompromising quality, 
          precision engineering, and innovative firearm design. Sami Ullah's commitment to excellence 
          and deep understanding of the defence industry have positioned Ghazi Arms as a trusted partner 
          for military agencies, law enforcement organizations, and professional operators across the region.
        </p>
        <p>
          Sami Ullah's vision is to continue advancing the company's product lines while maintaining 
          the highest standards of craftsmanship and reliability. His dedication to innovation and 
          customer satisfaction drives every decision at Ghazi Arms Industries.
        </p>
      </div>

      <aside className="about-aside">
        <h3>Company Highlights</h3>
        <ul>
          <li>Established in 1985 with over 35 years of industry leadership</li>
          <li>Certified defence manufacturing and export-ready production</li>
          <li>In-house engineering, testing, and assembly</li>
          <li>Trusted by agencies and dealers across the region</li>
        </ul>
        <p><strong>Location:</strong> Peshawar, Pakistan</p>
        <p><strong>Specialties:</strong> Firearms, tactical equipment, custom systems, training support</p>
        
        <div style={{ marginTop: '20px', padding: '15px', background: '#0a0a0a', borderRadius: '8px', border: '1px solid #333' }}>
          <h4 style={{ color: '#f1c40f', marginBottom: '10px' }}>Founder & Owner</h4>
          <p style={{ fontSize: '14px', lineHeight: '1.6' }}>
            <strong>Sami Ullah</strong><br/>
            With years of experience in defence manufacturing and strategic leadership, 
            Sami Ullah has led Ghazi Arms to become a premier firearms manufacturer. 
            His commitment to quality and innovation drives our mission.
          </p>
        </div>
        
        <img src="/images/about.jpg" alt="Company Image" />
      </aside>
    </section>
  )
}
