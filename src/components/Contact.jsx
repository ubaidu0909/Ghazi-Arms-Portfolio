import { useState } from 'react'

export default function Contact() {
  const [formData, setFormData] = useState({
    name: '',
    email: '',
    message: ''
  })

  const handleChange = (e) => {
    const { name, value } = e.target
    setFormData(prev => ({
      ...prev,
      [name]: value
    }))
  }

  const handleSubmit = (e) => {
    e.preventDefault()
    console.log('Form submitted:', formData)
    alert('Thank you for your message! We will get back to you soon.')
    setFormData({ name: '', email: '', message: '' })
  }

  return (
    <section id="contact" className="contact-section">
      <form className="contact-form" onSubmit={handleSubmit}>
        <label>Your Name</label>
        <input
          type="text"
          name="name"
          value={formData.name}
          onChange={handleChange}
          required
        />

        <label>Email</label>
        <input
          type="email"
          name="email"
          value={formData.email}
          onChange={handleChange}
          required
        />

        <label>Message</label>
        <textarea
          name="message"
          value={formData.message}
          onChange={handleChange}
          required
          rows="5"
        ></textarea>

        <button type="submit">Send Message</button>
      </form>

      <div className="contact-info">
        <h3>Our Office</h3>
        <p><b>Address:</b> Plot 16/17-A Small Industrial Estate (S.I.E) Kohat Road, Peshawar, Pakistan</p>
        <p><b>Phone:</b> +92 3339429962</p>
        <p><b>Email:</b> info@ghaziarms.com</p>
        <p><b>Email for Inquiries:</b> gk376643@gmail.com</p>
        <img src="https://images.pexels.com/photos/3184308/pexels-photo-3184308.jpeg" alt="Office" />
      </div>
    </section>
  )
}
