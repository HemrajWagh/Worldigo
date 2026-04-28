import React from 'react'

export default function Content() {
  return (
     <>
    <section className="legacy-section">
      <h2 className="legacy-heading">Contents</h2>
      <div className="legacy-container">
        <div className="legacy-grid">
          <div className="legacy-card">
            <i className="fas fa-layer-group" />
            <h3>172</h3>
            <p>Cards</p>
          </div>
          <div className="legacy-card">
            <i className="fas fa-box" />
            <h3>2</h3>
            <p>Sets</p>
          </div>
          <div className="legacy-card">
            <i className="fas fa-map-marked-alt" />
            <h3>16</h3>
            <p>States (10 categories each)</p>
          </div>
          <div className="legacy-card">
            <i className="fas fa-star" />
            <h3>5</h3>
            <p>Wild Cards + 1 Lucky Card</p>
          </div>
        </div>
      </div>
    </section>
    </>
  )
}
