<section id="resume" class="resume">
    <div class="container">
        <div class="section-title">
            <h2>Resume</h2>
            <p>My Qualifications & Experience</p>
        </div>

        <div class="resume-content">
            <div class="resume-columns">
                <!-- Education Column -->
                <div class="resume-column scroll-reveal">
                    <h3 class="resume-category">Education</h3>
                    
                    <div class="resume-item">
                        <div class="resume-header">
                            <h4>Holy Angel University</h4>
                            <span class="resume-date">2010 - 2014</span>
                        </div>
                        <div class="resume-subtitle">Bachelor of Information Technology</div>
                        <p>Major in Network Administration</p>
                    </div>
                    
                    <div class="resume-item">
                        <div class="resume-header">
                            <h4>Mega Computer College</h4>
                            <span class="resume-date">2009 - 2010</span>
                        </div>
                        <div class="resume-subtitle">Computer Science</div>
                    </div>
                    
                    <div class="resume-item">
                        <div class="resume-header">
                            <h4>Bonifacio V. Romero High School</h4>
                            <span class="resume-date">2005 - 2009</span>
                        </div>
                        <div class="resume-subtitle">High School Graduate</div>
                    </div>
                </div>

                <!-- Skills Column -->
                <div class="resume-column scroll-reveal">
                    <h3 class="resume-category">Technical Skills</h3>
                    
                    <div class="skills-group">
                        <h4>Front-End Development</h4>
                        <div class="skills-list">
                            <span class="skill-tag">HTML5</span>
                            <span class="skill-tag">CSS3</span>
                            <span class="skill-tag">JavaScript</span>
                            <span class="skill-tag">Bootstrap</span>
                            <span class="skill-tag">Responsive Design</span>
                        </div>
                    </div>
                    
                    <div class="skills-group">
                        <h4>Back-End Development</h4>
                        <div class="skills-list">
                            <span class="skill-tag">PHP</span>
                            <span class="skill-tag">WordPress</span>
                            <span class="skill-tag">Magento</span>
                            <span class="skill-tag">Shopify (Liquid)</span>
                            <span class="skill-tag">MySQL</span>
                        </div>
                    </div>
                    
                    <div class="skills-group">
                        <h4>Server & Tools</h4>
                        <div class="skills-list">
                            <span class="skill-tag">cPanel</span>
                            <span class="skill-tag">GoDaddy</span>
                            <span class="skill-tag">Git</span>
                            <span class="skill-tag">Microsoft Business Central</span>
                            <span class="skill-tag">Power BI</span>
                            <span class="skill-tag">Power Apps</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Objective Section -->
            <div class="resume-objective scroll-reveal">
                <h3 class="resume-category">Career Objective</h3>
                <div class="objective-content">
                    <p>
                        Experienced in web development with expertise in user interface design, testing, and debugging processes. 
                        I am actively seeking a lead web developer position to apply my advanced knowledge. 
                        Possessing a diverse and promising skill set, I am adept at both independent project management and collaborative teamwork.
                    </p>
                    <div class="resume-download">
                        <a href="https://drive.google.com/file/d/1WvLOyE35fxiHLV-nugshIsPygx3x4fiu/view" target="_blank" class="btn">
                            Download Full Resume
                        </a>
                    </div>
                </div>
            </div>

            <!-- Microsoft Business Solutions Section -->
            <div class="resume-specialty scroll-reveal">
                <h3 class="resume-category">Microsoft Business Solutions Expertise</h3>
                <div class="specialty-content">
                    <ul class="specialty-list">
                        <li>Troubleshooting in Microsoft Business Central and Dynamics Nav</li>
                        <li>Developing Power BI reports and dashboards integrated with Business Central for data retrieval</li>
                        <li>Creating Power Apps for business process automation</li>
                        <li>Customizing and optimizing Microsoft Business Solutions for client needs</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
.resume-content {
    margin-top: 3rem;
}

.resume-columns {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 3rem;
    margin-bottom: 3rem;
}

.resume-category {
    color: var(--primary);
    font-size: 1.5rem;
    margin-bottom: 2rem;
    padding-bottom: 0.5rem;
    border-bottom: 2px solid var(--primary);
}

.resume-item {
    background: var(--dark-light);
    padding: 1.5rem;
    border-radius: var(--border-radius);
    margin-bottom: 1.5rem;
    border-left: 4px solid var(--primary);
}

.resume-header {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    margin-bottom: 0.5rem;
}

.resume-header h4 {
    color: var(--text);
    margin-bottom: 0.5rem;
}

.resume-date {
    background: var(--primary);
    color: var(--text);
    padding: 0.25rem 0.75rem;
    border-radius: 20px;
    font-size: 0.875rem;
    font-weight: 600;
}

.resume-subtitle {
    color: var(--primary-light);
    font-weight: 600;
    margin-bottom: 0.5rem;
}

.skills-group {
    margin-bottom: 2rem;
}

.skills-group h4 {
    color: var(--text);
    margin-bottom: 1rem;
    font-size: 1.1rem;
}

.skills-list {
    display: flex;
    flex-wrap: wrap;
    gap: 0.5rem;
}

.skill-tag {
    background: var(--dark-light);
    color: var(--text);
    padding: 0.5rem 1rem;
    border-radius: 20px;
    font-size: 0.875rem;
    border: 1px solid var(--primary);
    transition: var(--transition);
}

.skill-tag:hover {
    background: var(--primary);
    transform: translateY(-2px);
}

.resume-objective {
    background: var(--dark-light);
    padding: 2rem;
    border-radius: var(--border-radius);
    margin-bottom: 2rem;
}

.objective-content p {
    font-size: 1.1rem;
    line-height: 1.8;
    margin-bottom: 1.5rem;
}

.resume-download {
    text-align: center;
}

.resume-specialty {
    background: var(--dark-light);
    padding: 2rem;
    border-radius: var(--border-radius);
}

.specialty-list {
    list-style: none;
    padding: 0;
}

.specialty-list li {
    padding: 0.75rem 0;
    padding-left: 1.5rem;
    position: relative;
    border-bottom: 1px solid rgba(255, 255, 255, 0.1);
}

.specialty-list li:before {
    content: '▸';
    color: var(--primary);
    position: absolute;
    left: 0;
}

@media (max-width: 768px) {
    .resume-columns {
        grid-template-columns: 1fr;
        gap: 2rem;
    }
    
    .resume-header {
        flex-direction: column;
        gap: 0.5rem;
    }
}
</style>