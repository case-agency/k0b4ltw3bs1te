<div class="job-post">
<h3><?= $job["position"]; ?>, <?= $job["company_name"]; ?></h3>

<h4>Location</h4>
<p><?= wpautop(auto_link($job["location"])); ?></p>

    <?php if (isset($job["job_summary"]) && is_string($job["job_summary"]) && !empty($job["job_summary"])) { ?>
        <h4>
            Job Summary:
        </h4>
        <?= wpautop(auto_link(html_entity_decode($job["job_summary"]))); ?>
    <?php } ?>

    <?php if (isset($job["background"]) && is_string($job["background"]) && !empty($job["background"])) { ?>
        <h4>
            Background:
        </h4>
        <?= wpautop(auto_link(html_entity_decode($job["background"]))); ?>
    <?php } ?>

    <?php if (isset($job["key_skills"]) && is_string($job["key_skills"]) && !empty($job["key_skills"])) { ?>
        <h4>
            Key Skills:
        </h4>
        <?= wpautop(auto_link($job["key_skills"])); ?>
    <?php } ?>

    <?php if (isset($job["job_duties"]) && is_array($job["job_duties"]) && isset($job["job_duties"]["duties"]) && is_array($job["job_duties"]["duties"]) && count($job["job_duties"]["duties"] > 0)) { ?>
        <h4>
            Job Duties:
        </h4>
        <ul>
            <?php foreach ($job["job_duties"]["duties"] as $duty) { ?>
                <li>
                    <?= html_entity_decode(auto_link($duty)); ?>
                </li>
            <?php } ?>
        </ul>
    <?php } ?>

    <?php if (isset($job["skills_experience"]) && is_array($job["skills_experience"]) && isset($job["skills_experience"]["skills"]) && is_array($job["skills_experience"]["skills"]) && count($job["skills_experience"]["skills"] > 0)) { ?>
        <h4>
            Desired Skills &amp; Experience:
        </h4>
        <ul>
            <?php foreach ($job["skills_experience"]["skills"] as $skill) { ?>
                <li>
                    <?= html_entity_decode(auto_link($skill)); ?>
                </li>
            <?php } ?>
        </ul>
    <?php } ?>

    <?php if (isset($job["closing_date"]) && is_array($job["closing_date"]) && isset($job["closing_date"]["date"]) && is_string($job["closing_date"]["date"]) && !empty($job["closing_date"]["date"])) { ?>
        <h4>
            Closing Date:
        </h4>
        <?= wpautop(auto_link($job["closing_date"]["date"])); ?>
    <?php } ?>

    <?php if (isset($job["salary"]) && is_array($job["salary"]) && isset($job["salary"]["message"]) && is_string($job["salary"]["message"]) && !empty($job["salary"]["message"])) { ?>
        <h4>
            Salary:
        </h4>
        <?= wpautop(auto_link($job["salary"]["message"])); ?>
    <?php } ?>

    <?php if (isset($job["start_date"]) && is_array($job["start_date"]) && isset($job["start_date"]["date"]) && is_string($job["start_date"]["date"]) && !empty($job["start_date"]["date"])) { ?>
        <h4>
            Start Date:
        </h4>
        <?= wpautop(auto_link($job["start_date"]["date"])); ?>
    <?php } ?>

    <h4>
        Status:
    </h4>
    <?= wpautop(auto_link($job["status"])); ?>

    <h4>
        Application Process:
    </h4>
    <?php 
       if(isset($job["application_process"]["notes"]) && !empty($job["application_process"]["notes"])){
		
       	echo wpautop(auto_link(html_entity_decode($job["application_process"]["notes"])));
       }

	if(isset($job["application_process"]["steps"]) && is_array($job["application_process"]["steps"])){
              echo "<ul>";
		foreach($job["application_process"]["steps"] as $step){
			echo "<li>" . auto_link($step) . "</li>";
		}		
		echo "</ul>";
       }

      if(isset($job["application_process"]["details"]) && is_array($job["application_process"]["details"])){
		foreach($job["application_process"]["details"] as $detail){
			echo "<p>". auto_link($detail["description"]);
       ?>
		 
                   <a href="mailto:<?= $detail["email"]; ?>">
                       <?= $detail["email"]; ?>
                   </a>
               
       <?php
              echo "</p>";
		}
	}
    
       ?>

    <?php if (isset($job["important_notice"]) && is_string($job["important_notice"]) && !empty($job["important_notice"])) { ?>
        <h4>
            Important Notice:
        </h4>
        <?= wpautop(auto_link($job["important_notice"])); ?>
    <?php } ?>
</div>