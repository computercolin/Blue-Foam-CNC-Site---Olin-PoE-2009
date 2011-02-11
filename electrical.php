<?php include('./header.php') ?>

<div class="page-title">
        Electrical System
</div>
<div class="main">
    <div class="item">
        <div class="invisible-date"></div>
        <img class="lone-image" src="img/electrical/electrical_mess_730.jpg" />
    </div>
    <div class="item">
        <div class="date"></div>
        <div class="content">
            <h1>Introduction</h1>
            <div class="body">
                <a target="_blank" href="img/electrical/system_diagram_large.png"><img style="margin-left: 22%" src="img/electrical/system_diagram_400.png"/></a>
                <p>
                The electrical system is composed of four motor controllers and a computer-interface-controller module. The controller module and motor controller are arranged in a master-slave configuration and communicate instructions over using SPI (Serial Peripheral Interface Bus). The controller module also interfaces with the host computer over USB and provides a buffer from which for instructions  are sent to the motor controllers.
                </p>
            </div>
        </div>
    </div>
    <div class="item">
        <div class="date"></div>
        <div class="content">
            <h1>Motor Controller</h1>
            <div class="body">
                <p>
                <a target="_blank" href="img/electrical/motor_encoder_large.jpg" ><img class="floatLeft" src="img/electrical/motor_encoder_500.jpg" /></a>
                We use motor packages comprised of a Maxon 203437 motor, a quadrature encoder, PWB encoders ME16, and a custom line driver circuit. This convenient package is directly wired to the microcontroller circuit. This circuit is composed of both a microcontroller, PIC18F2455, and a H-bridge, SN75441. The microcontroller provides a PWM output of approximately 30 kHz that drives the H-bridge. The H-bridge then amplifies that signal to directly power the DC motor. During this process, the motor controller observes the quadrature signal from the encoder and calculates the motor's speed and progressed distance. This controls a PID loop within the motor controller software that automatically adjusts speed by varying the PWM signal. This allows the motor to automatically adjust to a set speed. The PID control loop is necessary as each motor and module performs slightly differently.
                </p>
                
                <p>
                The motor controller has three set variables: a speed, direction, and distance to travel. These three variables are set using SPI. Additionally, SPI is used to issue start and stop commands to the microcontroller.
                </p>
            </div>
        </div>
    </div>
    <div class="item">
        <div class="date"></div>
        <div class="content">
            <h1>Master-Slave Interface</h1>
            <div class="body">
                <p>
                <img class="floatRight" src="img/electrical/the_pics_500.jpg"  />
                All four motor controller circuits are identical. The master microcontroller maintains pairs of instructions to issue sequentially to the motor controllers. Each pair of instructions includes an X-axis instruction and Y-axis instruction. Each instruction is then sent to the two motor controllers for that module. All communication is handled using SPI and instructions are all communicated individually using a custom protocol. This protocol consists of an initial instruction to prepare the slave to receive data. Next, the master transmits each byte of the instruction. With each transmission, the slave returns the last byte received. This results allows the master to verify correct transmission of each bit.
                </p>
            </div>
        </div>
    </div>
    <div class="item">
        <div class="date">
            <div></div>
            <span></span>
        </div>
        <div class="content">
            <h1>Wiring</h1>
            <div class="body">
                <p>
                <a target="_blank" href="img/electrical/8p8c_cat6_wiring_large.jpg"><img width="684" class="floatLeft" src="img/electrical/8p8c_cat6_wiring_684.jpg"/></a>
                The four motor controllers and master controller are all held on a single breadboard. 8P8C connectors are attached to each motor package and each motor controller. This allows easy wiring of the device using standard Ethernet cables.</p>
            </div>
        </div>
    </div>
</div>
<?php include('./footer.php') ?>
